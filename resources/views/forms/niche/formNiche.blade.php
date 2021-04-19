@if(isset($niche_modal) == null)
{!! Form::open(['route' =>'niche.store']) !!}
@else
{!! Form::model($niche_modal,['route' => ['niche.update',$niche_modal->id]]) !!}
@method('PUT')
@endif
        <div class="form-group col-sm-12">
            @error('name')<div> <span class="error text-danger">{{ $message }}</span></div> @enderror
            <label for="exampleInputEmail1">Descrição</label>
            {!! Form::text('description', $value=null, ['class'=>'form-control']) !!}
        </div>

        <div class="col-sm-12">
            <button type="submit" class="btn btn-success btn-block"> Confirmar</button>
        </div>



{!! Form::close() !!}