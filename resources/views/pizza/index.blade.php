@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center"> <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('menu') }}</div>

                <div class="card-body">
                  <ul class="list-group">
                    <a href="" class="list-group-item list-group-item-action">view</a>
                    <a href="" class="list-group-item list-group-item-action">create</a>
                  </ul>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="form-group">
                        <lable for="name"> name of pizza </label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <lable for="description">description of pizza </label>
                       <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-inline">
                        <lable>price</lable>
                        <input type="number" class="form-control" placeholder="small size price">
                        <input type="number" class="form-control" placeholder="medium size price">
                        <input type="number" class="form-control" placeholder="large size price">
                    </div>
                    <div class="form-group">
                        <lable for="description">category </label>
                        <select class="form-control">
                            <option value="vegierian"> vegitable pizza</option>
                            <option value="nonvegiterian">non vegierian pizza</option>
                            <option value="tradtional"> traditional pizza </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <lable>image</lable>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary" type="submit">save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
