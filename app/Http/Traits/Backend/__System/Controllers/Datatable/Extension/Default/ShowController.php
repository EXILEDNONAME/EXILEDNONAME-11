<?php

namespace App\Http\Traits\Backend\__System\Controllers\Datatable\Extension\Default;

use Illuminate\Http\Request;

trait ShowController {

  /**
  **************************************************
  * @return SHOW
  **************************************************
  **/

  public function show($id) {
    $url = $this->url;
    $model = $this->model;
    $data = $this->model::findOrFail($id);
    return view($this->path . 'show', compact('data', 'model', 'url'));
  }
}
