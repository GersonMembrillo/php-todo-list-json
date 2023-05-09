const { createApp } = Vue;

createApp({
	data() {
		return {
			title: '2Do',
			todoList: [],
			apiUrl: 'server.php',
			todoItem: '',
		};
	},
	methods: {
		readList() {
			axios.get(this.apiUrl).then((res) => {
				this.todoList = res.data;
			});
		},
		updateList() {
			console.log(this.todoItem);
			const data = {
				todoItem: this.todoItem,
			};
			axios
				.post(this.apiUrl, data, { headers: { 'Content-Type': 'multipart/form-data' } })
				.then((res) => {
					this.todoItem = '';
					this.todoList = res.data;
				});
		},
		toggleTaskDone(index) {
			const data = {
				updateItem: index,
			};
			axios
				.post(this.apiUrl, data, { headers: { 'Content-Type': 'multipart/form-data' } })
				.then((res) => {
					this.todoList = res.data;
				});
		},
		deleteTask(index) {
			const data = {
				deleteItem: index,
			};
			axios
				.post(this.apiUrl, data, { headers: { 'Content-Type': 'multipart/form-data' } })
				.then((res) => {
					this.todoList = res.data;
				});
		},
	},
	mounted() {
		this.readList();
	},
}).mount('#app');
