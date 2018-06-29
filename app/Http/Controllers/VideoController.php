<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    function showVideo($id)
    {
        $filename = storage_path() . "/pdfs/$id.pdf";
        $headers = array(
            'Content-type'          => 'application/pdf',
            'Content-Disposition'   => 'inline; filename="' . $filename . '"'
        );
        return Response::make( file_get_contents($filename), 200, $headers);
    }
}
