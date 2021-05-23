<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
    
    <form action="{{route("products.store")}}" methods="POST">
        @method('POST')
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="foodgroup">foodgroup</label>
            <input type="text" class="form-control" id="foodgroup" name="foodgroup" placeholder="scrivi il foodgroup">
        </div>
        <div class="form-group">
            <label for="calories">calories</label>
            <input type="text" class="form-control" id="calories" name="calories" placeholder="scrivi le calorie">
        </div>
        <div class="form-group">
            <label for="fat">fat</label>
            <input type="text" class="form-control" id="fat" name="fat" placeholder="scrivi i grassi">
        </div>
        <div class="form-group">
            <label for="protein">protein</label>
            <input type="text" class="form-control" id="protein" name="protein" placeholder="scrivi le proteine">
        </div>
        <div class="form-group">
            <label for="fiber">carbohydrate</label>
            <input type="text" class="form-control" id="carbohydrate" name="carbohydrate" placeholder="scrivi i carboidrati">
        </div>
        <div class="form-group">
            <label for="sugars">sugars</label>
            <input type="text" class="form-control" id="sugars" name="sugars" placeholder="scrivi gli zuccheri">
        </div>
        <div class="form-group">
            <label for="fiber">fiber</label>
            <input type="text" class="form-control" id="fiber" name="fiber" placeholder="scrivi le fibre">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>