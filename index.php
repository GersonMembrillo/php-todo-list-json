<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
	<script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
	<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
	<link rel="stylesheet" href="./css/style.css" />
	<title>2Do</title>
</head>

<body class="bg-secondary">
	<div class="wrapper">
		<div id="app">
			<section class="todo-list py3">
				<div class="container">
					<div class="col-12">
						<h1 class="mb-0 display-1 text-muted text-center text-uppercase fw-bold">2do List</h1>
						<h3 class="mb-3 fw-light text-center text-white text-uppercase">for your everyday, everytime, everywhere</h3>
						<ul class="list-group list-group-flush border border-1 rounded">
							<li v-for="(todo, index) in todoList" :key="index" class="list-group-item d-flex justify-content-between align-items-center">
								<span class="w-100 h-100 task-item" :class="{ 'text-decoration-line-through' : todo.done }" @click="toggleTaskDone(index)">{{ todo.task }}</span>
								<span @click="deleteTask(index)" class="badge bg-danger p-2"><i class="fa-regular fa-trash-can"></i></span>
							</li>
						</ul>
					</div>
				</div>
			</section>
			<section class="add-todo mt-3">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="input-group mb-3">
								<input @keyup.enter="updateList" v-model="todoItem" type="text" class="form-control" placeholder="New Task ..." aria-label="Inserisci nuovo elemento in lista" aria-describedby="button-addd">
								<button @click="updateList" class="btn btn-primary" type="button" id="button-add">Add New Task</button>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

	<script src="./js/script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>