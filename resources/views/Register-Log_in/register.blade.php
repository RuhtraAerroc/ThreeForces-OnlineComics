@extends('Layout.LayoutRegisterLogIn')
@section('title')
<title>CADASTRO</title>
@endsection
@section('LayoutBody')
<div class="flex justify-center items-center text-lg text-violet-800 rounded-lg bg-violet-50 w-3/5 h-3/5">
    <div class="grid grid-cols-2 p-4 w-full h-full">
        <div class="col-span-1">oi</div>
        <div class="col-span-1">
            <div class="my-2">
                <h1 class="font-bold text-3xl">Cadastro.</h1>
                <p class="text-justify mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste minus inventore, placeat assumenda magnam quibusdam suscipit accusamus aut non, id totam, nulla saepe voluptate adipisci omnis nemo praesentium et mollitia.</p>
            </div>
            <form class="grid my-2" action="">
                Name: <input class="bg-violet-200 rounded-lg w-3/5" type="text" name="name">
                E-mail: <input class="bg-violet-200 rounded-lg w-3/5" type="text" name="email">
                Nick: <input class="bg-violet-200 rounded-lg w-3/5" type="text" name="nick">
                Telefone: <input class="bg-violet-200 rounded-lg w-3/5" type="text" name="telefone">
                Gênero:
                <div class="grid grid-cols-3">
                    <div><input class="bg-violet-200 rounded-lg w-3/5" type="radio" name="gender" value="female">Feminino</div>
                    <div><input class="bg-violet-200 rounded-lg w-3/5" type="radio" name="gender" value="male">Masculino</div>
                    <div><input class="bg-violet-200 rounded-lg w-3/5" type="radio" name="gender" value="other">Outros</div>
                </div>
                Senha: <input class="bg-violet-200 rounded-lg w-3/5" type="password" name="senha">
                Confirmar Senha: <input class="bg-violet-200 rounded-lg w-3/5" type="password_confirmation" name="confirmar_senha">
                <div class="grid grid-cols-2 my-2">
                    <div class="button w-11/12 hover:bg-red-600"><a href="#">Cancelar</a></div>
                    <input class="button w-11/12 hover:bg-green-600" type="submit" name="cadastro" value="Cadastrar">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
