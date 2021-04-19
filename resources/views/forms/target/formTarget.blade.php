@inject('niches', 'App\Models\Niche')
@php
$estados = array(''=>'-----', 'AC'=>'Acre', 'AL'=>'Alagoas', 'AP'=>'Amapá', 'AM'=>'Amazonas', 'BA'=>'Bahia',
'CE'=>'Ceará', 'DF'=>'Distrito Federal', 'ES'=>'Espírito Santo', 'GO'=>'Goiás', 'MA'=>'Maranhão', 'MT'=>'Mato Grosso',
'MS'=>'Mato Grosso do Sul', 'MG'=>'Minas Gerais', 'PA'=>'Pará', 'PB'=>'Paraíba', 'PR'=>'Paraná', 'PE'=>'Pernambuco',
'PI'=>'Piauí', 'RJ'=>'Rio de Janeiro', 'RN'=>'Rio Grande do Norte', 'RS'=>'Rio Grande do Sul', 'RO'=>'Rondônia',
'RR'=>'Roraima', 'SC'=>'Santa Catarina', 'SP'=>'São Paulo', 'SE'=>'Sergipe', 'TO'=>'Tocantins' );
    
@endphp

{!! Form::open(['route' =>'target.store']) !!}
<div class="row">
    <div class="col-sm-12">
       <p class="text-danger">* Campos Obrigatórios</p>
    </div>
<div class="form-group col-sm-6">
    @error('name')<div> <span class="error text-danger">{{ $message }}</span></div> @enderror
    <label for="exampleInputEmail1" class="text-purple">Nome da empresa:
        <span class="text-danger">*</span>
    </label>
    {!! Form::text('empresa', $value=null, ['class'=>'form-control', 'required']) !!}
</div>
<div class="form-group col-sm-6">
    @error('name')<div> <span class="error text-danger">{{ $message }}</span></div> @enderror
    <label for="exampleInputEmail1" class="text-purple">Representante:</label>
    {!! Form::text('representante', $value=null, ['class'=>'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    <label for="exampleInputEmail1" class="text-purple">Ramo da empresa: <span class="text-danger">*</span></label>
    {!! Form::select('niche_id', $niches->pluck('description','id')->prepend('-----','') ,'', ['class'=>'form-control',
    'required']) !!}
</div>
<div class="form-group col-sm-6">
    <label for="exampleInputEmail1" class="text-purple">Estado: <span class="text-danger">*</span></label>
    {!! Form::select('uf', $estados,'', ['class'=>'form-control','required']) !!}
</div>
<div class="form-group col-sm-6">
    <label for="exampleInputEmail1" class="text-purple">Cidade: <span class="text-danger">*</span></label>
 {!! Form::text('cidade', $value=null, ['class'=>'form-control', 'required']) !!}
</div>
<div class="form-group col-sm-6">
    @error('name')<div> <span class="error text-danger">{{ $message }}</span></div> @enderror
    <label for="exampleInputEmail1" class="text-purple">Telefone: <span class="text-danger">*</span></label>
    {!! Form::text('telefone', $value=null, ['class'=>'form-control','required']) !!}
</div>
<div class="form-group col-sm-6" >
    @error('name')<div> <span class="error text-danger">{{ $message }}</span></div> @enderror
    <label for="exampleInputEmail1" class="text-purple">Whatsapp:</label>
    {!! Form::text('whatsapp', $value=null, ['class'=>'form-control',]) !!}
</div>
<div class="form-group col-sm-6">
    @error('name')<div> <span class="error text-danger">{{ $message }}</span></div> @enderror
    <label for="exampleInputEmail1" class="text-purple">Instagram:</label>
    {!! Form::text('instagram', $value=null, ['class'=>'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    @error('name')<div> <span class="error text-danger">{{ $message }}</span></div> @enderror
    <label for="exampleInputEmail1" class="text-purple">facebook:</label>
    {!! Form::text('facebook', $value=null, ['class'=>'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    @error('name')<div> <span class="error text-danger">{{ $message }}</span></div> @enderror
    <label for="exampleInputEmail1" class="text-purple">Site:</label>
    {!! Form::text('site', $value=null, ['class'=>'form-control']) !!}
</div>
<div class="form-group col-sm-12">
    @error('name')<div> <span class="error text-danger">{{ $message }}</span></div> @enderror
    <label for="exampleInputEmail1"class="text-purple">Outras Redes:</label>
    {!! Form::textarea('outras_redes', $value=null, ['class'=>'form-control','rows'=>'3']) !!}
</div>


<div class="col-sm-12">
    <button type="submit" class="btn btn-info btn-block"> Confirmar</button>
</div>
</div>



{!! Form::close() !!}