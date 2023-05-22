@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.food.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.foods.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="foodname">{{ trans('cruds.food.fields.foodname') }}</label>
                <input class="form-control {{ $errors->has('foodname') ? 'is-invalid' : '' }}" type="text" name="foodname" id="foodname" value="{{ old('foodname', '') }}" required>
                @if($errors->has('foodname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('foodname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.food.fields.foodname_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="product">{{ trans('cruds.food.fields.product') }}</label>
                <input class="form-control {{ $errors->has('product') ? 'is-invalid' : '' }}" type="text" name="product" id="product" value="{{ old('product', '') }}" required>
                @if($errors->has('product'))
                    <div class="invalid-feedback">
                        {{ $errors->first('product') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.food.fields.product_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="price">{{ trans('cruds.food.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="text" name="price" id="price" value="{{ old('price', '') }}" required>
                @if($errors->has('price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.food.fields.price_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="expired">{{ trans('cruds.food.fields.expired') }}</label>
                <input class="form-control {{ $errors->has('expired') ? 'is-invalid' : '' }}" type="text" name="expired" id="expired" value="{{ old('expired', '') }}" required>
                @if($errors->has('expired'))
                    <div class="invalid-feedback">
                        {{ $errors->first('expired') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.food.fields.expired_helper') }}</span>
            </div>

            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection