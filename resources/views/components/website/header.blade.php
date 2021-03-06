<nav class="bg-white shadow-2xl bg-contain bg-repeat" style="background-image: url('{{ asset("img/texture.jpeg") }}')">
	<div class=" max-w-6xl mx-auto px-4">
		<div class="flex justify-center space-x-3 md:space-x-5 items-center">
			
				
				
				<x-website.header.item href="{{ route('website.about') }}" title="ABOUT US"></x-website.header.item>
				<x-website.header.item  href="{{ route('website.contacts') }}" title="CONTACTS"></x-website.header.item>
				
				
					<a  href="{{ route('website.home') }}" class="flex items-center py-4 px-2">
					    <img src="{{ asset('img/nr.png') }}" alt="fresh" class="h-16">
					</a>
				
				<x-website.header.item href="{{ route('website.recepies') }}" title="HOT SAUCES"></x-website.header.item>
				<x-website.header.item href="{{ route('website.meals') }}" title="RECEPIES"></x-website.header.item>
				
				
				
				<div class="md:hidden p-2" onclick="toggleMenu()">
					<x-svg.menu />
				</div>
			
		</div>
	</div>
	<div id="main_menu" class="relative bg-white shadow-lg md:hidden hidden" >
		<div class="flex flex-col">
			<x-website.header.item :show="true" href="{{ route('website.about') }}" title="ABOUT US"></x-website.header.item>
			<x-website.header.item :show="true" href="{{ route('website.recepies') }}" title="HOT SAUCES"></x-website.header.item>
			<x-website.header.item :show="true" href="{{ route('website.meals') }}"  title="RECEPIES"></x-website.header.item>
			<x-website.header.item :show="true" href="{{ route('website.contacts') }}" title="CONTACTS"></x-website.header.item>

		</div>
	</div>
	<script>
		function toggleMenu(){
			let menu = document.getElementById("main_menu");
			if(menu.classList.contains("hidden")){
				menu.classList.remove("hidden")
			}else{
				menu.classList.add("hidden");
			}
		}
		window.addEventListener("resize", function(event) {
			if(document.body.clientWidth > 768){
				let menu = document.getElementById("main_menu");
				if(menu.classList.contains("hidden")){
					menu.remove("hidden");
				}
			}
		});
	</script>
</nav>




