<div class="navigation">
	<ul>
		<li class="list active">
			<b></b>
			<b></b>
			<a href="#">
				<span class="icon">
					<i class="bi bi-house"></i>
				</span> 
				<span class="title">Accueil</span>
			</a>
		</li>
		<li class="list">
			<b></b>
			<b></b>
			<a href="#">
				<span class="icon">
					<i class="bi bi-person-workspace"></i>
				</span> 
				<span class="title">Projets</span>
			</a>
		</li>
		<li class="list">
			<b></b>
			<b></b>
			<a href="#">
				<span class="icon">
					<i class="bi bi-file-earmark-person"></i>
				</span> 
				<span class="title">CV</span>
			</a>
		</li>
		<li class="list">
			<b></b>
			<b></b>
			<a href="#">
				<span class="icon">
					<i class="bi bi-clipboard-data"></i>
				</span> 
				<span class="title">Veille</span>
			</a>
		</li>
	</ul>
</div>

<div class="toggle">
	<i class="bi bi-list open"></i>
	<i class="bi bi-x-lg close"></i>
</div>

<script type="text/javascript">
	let menu = document.querySelector('.toggle');
	let navigation = document.querySelector('.navigation');
	menu.onclick = function(){
		menu.classList.toggle('active');
		navigation.classList.toggle('active');
	}


	// Permet le changement de couleurs lorsque l'on clique sur les liens
	let list = document.querySelectorAll('.list');
	for (let i = 0; i < list.length; i++) {
		list[i].onclick = function(){
			let j = 0;
			while(j < list.length){
				list[j++].className = 'list';
			}
			list[i].className = 'list active';
		}
	}
</script>