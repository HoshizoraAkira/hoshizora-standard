<?php

namespace App\Exports;

use App\Models\Bookshelfs;
use Maatwebsite\Excel\Concerns\FromCollection;

class BookShelfsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Bookshelfs::all();
    }
}
