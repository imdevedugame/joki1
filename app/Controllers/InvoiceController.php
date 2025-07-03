<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransactionModel;
use App\Models\TransactionDetailModel;
use Dompdf\Dompdf;

class InvoiceController extends BaseController
{
    protected $transactionModel;
    protected $detailModel;

    public function __construct()
    {
        $this->transactionModel = new TransactionModel();
        $this->detailModel = new TransactionDetailModel();
    }

    public function show($id)
    {
        $transaction = $this->transactionModel->find($id);
        if (!$transaction) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Transaksi tidak ditemukan.");
        }

        $details = $this->detailModel->where('transaction_id', $id)->findAll();

        return view('v_invoice', [
            'transaction' => $transaction,
            'details' => $details
        ]);
    }
    public function print($id)
{
    $transaksiModel = new \App\Models\TransactionModel();
    $detailModel = new \App\Models\TransactionDetailModel();

    $transaction = $transaksiModel->find($id);

    $details = $detailModel
        ->select('transaction_detail.jumlah, transaction_detail.subtotal_harga, product.nama, product.deskripsi, product.harga')
        ->join('product', 'product.id = transaction_detail.product_id')
        ->where('transaction_detail.transaction_id', $id)
        ->findAll();

    $html = view('v_invoice_pdf', [
        'transaction' => $transaction,
        'details' => $details
    ]);

    $dompdf = new \Dompdf\Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
   $dompdf->stream("invoice_$id.pdf", ["Attachment" => true]);

}

}
