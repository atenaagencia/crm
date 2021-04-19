@inject('roles', 'App\Models\Role')
{!! Form::open(['route'=>'user.store','class'=>'row']) !!}
<div class="form-group col-sm-6">
    @error('name')@enderror
    <label for="exampleInputEmail1" class="@error('name'){{'text-danger'}}@enderror">
        Nome
        @error('name'){{'('.$message.')'}}@enderror
    </label>
    {!! Form::text('name', $value=null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group col-sm-6">
    <label for="exampleInputEmail1" class="@error('cpf'){{'text-danger'}}@enderror">
        CPF
        @error('cpf'){{'('.$message.')'}}@enderror
    </label>
    {!! Form::text('cpf', $value=null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group col-sm-6">
    <label for="exampleInputEmail1" class="@error('email'){{'text-danger'}}@enderror">
        E-mail
        @error('email'){{'('.$message.')'}}@enderror
    </label>
    {!! Form::text('email', $value=null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group col-sm-6">
    <label for="exampleInputEmail1">
        Função
    </label>
    {!! Form::select('role_id', $roles->pluck('description', 'id'), '',['class' => 'form-control', 'required']) !!}
</div>
<div class="col-sm-12">
    <input class="btn btn-success btn-block" type="submit" value="Cadastrar">
</div>



{!! Form::close() !!}