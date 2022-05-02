<nav class="bg-white shadow-2xl">
	<div class=" max-w-6xl mx-auto px-4">
		<div class="flex justify-between items-center">
			<!-- <div flex space-x-7> -->
				<!-- Well begun is half done. - Aristotle -->
				<div class="">
					<a  href="{{ route('website.home') }}" class="flex items-center py-4 px-2">
					    <img src="{{ asset('img/nr.png') }}" alt="fresh" class="h-16">
					</a>
				</div>
				<x-website.header.item href="{{ route('website.about') }}" title="ABOUT US"></x-website.header.item>
				<x-website.header.item  href="{{ route('website.our_home') }}" title="OUR HOME"></x-website.header.item>
				
				<x-website.header.item href="{{ route('website.hot_sauces') }}" title="HOT SOURCES"></x-website.header.item>
				
				<x-website.header.item href="{{ route('website.recepies') }}" title="RECEPIES"></x-website.header.item>


					
				
				<div class="md:hidden p-2" onclick="toggleMenu()">
					<x-svg.menu />
				</div>
			<!-- </div> -->
		</div>
	</div>
	<div id="main_menu" class="relative bg-white shadow-lg md:hidden hidden" >
		<div class="flex flex-col">
			<x-website.header.item :show="true" href="{{ route('website.hot_sauces') }}"  title="HOT SOURCES"></x-website.header.item>
			<x-website.header.item :show="true" href="{{ route('website.about') }}" title="ABOUT"></x-website.header.item>
			<x-website.header.item :show="true" href="{{ route('website.recepies') }}" title="RECEPIES"></x-website.header.item>
			<x-website.header.item href="{{ route('website.our_home') }}" :show="true" title="OUR HOME"></x-website.header.item>
			
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
			if(document.body.clientWidth > 600){
				let menu = document.getElementById("main_menu");
				if(menu.classList.contains("hidden")){
					menu.remove("hidden");
				}
			}
		});
	</script>
</nav>




