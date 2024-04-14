<x-app-layout>
	<!--Container-->
	<div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">

		<!--Card-->
		<div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

        <div class="category-filter">
            <div class="jumbotron text-center">
                <h1 class="text-black" style="font-size: 30px;"><strong>Info Program Desa</strong></h1>
            </div>
                @foreach ($posts as $post)
                <div class="blog-list">
                    <div class="image">
                        <a href="{{ route('program.view', ['id' => $post->id]) }}">
                        <img style="height: 200px; width: 350px;" src="{{ $post->banner_url }}"/>
                        </a>
                    </div>
                    <div class="text">
                        <a style="font-size: 24px;" href="{{ route('program.view', ['id' => $post->id]) }}">{{ $post->title }}</a>
                        </br></br>
                        <div style="white-space: pre">{{ $post->excerpt }}</div>
                    </div>
                </div>
                @endforeach
		</div>
		<!--/Card-->
	</div>
	<!--/container-->
</x-app-layout>
