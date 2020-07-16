@extends('layouts.master')
@section('content')
    <!-- banner -->
<div class="w3-banner-top">
	<div class="agileinfo-dot">
			<div class="w3layouts_menu">
				<nav class="cd-stretchy-nav edit-content">
					<a class="cd-nav-trigger" href="#0"> Menu <span aria-hidden="true"></span> </a>
					<ul>
						<li><a href="#home" class="scroll"><span>Home</span></a></li>
						<li><a href="#about" class="scroll"><span>Overview</span></a></li>
						<li><a href="#experiences" class="scroll"><span>Education</span></a></li>
						<li><a href="#skills" class="scroll"><span>Experiences</span></a></li>
						<li><a href="#projects" class="scroll"><span>Projects</span></a></li>
                        <li><a href="#contact" class="scroll"><span>Contact</span></a></li>
                        <li><a href="/home"><span>Login</span></a></li>
					</ul>
					<span aria-hidden="true" class="stretchy-nav-bg"></span>
				</nav>
			</div>

		<div class="w3-banner-grids">
			<div class="col-md-6 w3-banner-grid-left">
				<div class="w3-banner-img">
                    @if(count($posts) > 0)
					@foreach($posts as $post)
                    <img src="/storage/profile_images/{{$post->profile_image}}" alt="img">
                    <h3 class="test">{{$post->name}}</h3>
					<p class="test" >{{$post->work}}</p>
					<p class="test" >{{$post->education}}</p>
                    @endforeach
                    @endif
					<br>
				</div>
			</div>
			<div class="col-md-6 w3-banner-grid-right">
			<div class="w3-banner-text">
                <h3>Professional experience</h3>
                @if(count($posts) > 0)
                @foreach($posts as $post)
                @if(!Auth::guest())
                @if(Auth::user()->id == $post->user_id)
				<form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                @endif
                @endif
                <p>
					<span>{{$post->companyname}}</span>
					<br>
					<span>{{$post->from}} to {{$post->to}}</span>
					<br>
					<span>Department :</span>
					<span>{{$post->department}}</span>
					<br>
					<span>Location :</span>
					<span>{{$post->complocation}}</span>
					<br>
					<span>Position :</span>
					<span>{{$post->position}}</span>
					<br>
					<span>Responsibilities :</span>
					<span>{{$post->duty}}</span>
                </p>
                @endforeach
                @endif
			</div>
				<div class=" w3-right-addres-1">
                    @if(count($posts) > 0)
                    @foreach($posts as $post)
                    <ul class="address">
                        <li>
                            <ul class="agileits-address-text">
                                <li class="agile-it-adress-left"><b>LANGUAGES</b></li>
                                <li><span>:</span>{{$post->language}}</li>
                            </ul>
                        </li>
                        <li>
                            <ul class="agileits-address-text">
                                <li class="agile-it-adress-left"><b>ADDRESS</b></li>
                                <li><span>:</span>{{$post->location}}</li>
                            </ul>
                        </li>
                        <li>
                            <ul class="agileits-address-text">
                                <li class="agile-it-adress-left"><b>E-MAIL</b></li>
                                <li><span>:</span><a href="mailto:example@mail.com">{{$post->email}}</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul class="agileits-address-text">
                                <li class="agile-it-adress-left"><b>Links</b></li>
                                <li><span>:</span><a href="https://www.researchgate.net/profile/ABM_Rafiqul_Islam" target="_blank"><i style="color: #fff;" class="fab fa-researchgate fa-2x"></i></a>
                                    <i class="fab fa-linkedin fa-2x"></i>
                                    <i class="fab fa-facebook-square fa-2x">
                                    </i>
                                    <i class="fab fa-twitter-square fa-2x"></i>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    @endforeach
                    @endif
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
		<div class="thim-click-to-bottom">
				<a href="#about" class="scroll">
					<i class="fa  fa-chevron-down"></i>
				</a>
			</div>

	</div>
<!-- banner -->
<!-- /about -->

<div class="w3-about" id="about">
	<div class="container">
		<div class="w3-about-head">
			<h3>Research overview
			</h3>
		</div>
		<div class="w3-about-grids">
		<div class=" w3-about-grids1">
				<div class="col-md-6 w3-about-grid-left1">
					<img src="https://images.unsplash.com/photo-1579165466991-467135ad3110?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="img1">

				</div>
				<div class="col-md-6 w3-about-grid-right1">
					<h3>Disciplines</h3>
					<p>
						<span class="border-around">Public Health</span>
						<span class="border-around">Geomicrobiology</span>
						<span class="border-around">Science Education</span>
						<span class="border-around">Mineralogy</span>
						<span class="border-around">Geochemistry</span>
						<span class="border-around">Gastroenterology</span>
						<span class="border-around">Toxicology</span>
						<span class="border-around">Curriculum Theory</span>
					</p>
					<h3>Research</h3>
					<div class= "w3-about-grid-small-border">
					<div class="col-md-4 w3-about-grid-small">
						<h3 class="w3-head-project">32</h3>
						<h5>Research items</h5>
					</div>
					<div class="col-md-4 w3-about-grid-small">
					<h3 class="w3-head-project">21</h3>
						<h5>Article</h5>
					</div>
					<div class="col-md-4 w3-about-grid-small">
						<h3 class="w3-head-project">3</h3>
						<h5>Projects</h5>
						<div class="clearfix"></div>
					</div>
				<div class="clearfix"></div>
				</div>
				</div>
				<div class="clearfix"></div>
				<div class="w3-about-grids2">
				<div class="col-md-6 w3-about-grid-left2">
					<h3>Current affiliation</h3>
					<p> The University of Tokyo
						<br>
						Location
						<br>
						Bunkyō-ku, Japan
						<br>
						Department
						<br>
						Department of International Health</p>
					<h4><a href="https://www.researchgate.net/profile/ABM_Rafiqul_Islam" target="_blank">Readmore</a></h4>

				</div>
				<div class="col-md-6 w3-about-grid-right2">
				<img src="https://images.unsplash.com/photo-1532916123995-50bad0fc528e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="img1">

				</div>
				<div class="clearfix"></div>
				</div>
		</div>
	</div>
</div>
</div>
<!-- //about  -->
<!--/ education -->
	<div class="w3-edu-top" id="experiences">
	<div class="container">
		<div class="w3-edu-grids">
			<div class="col-md-6 w3-edu-grid-left">
				<div class="w3-edu-grid-header">
				<h3>Grants, awards, and scholarships</h3>
				</div>
				<div class="col-md-4 w3-edu-info1">
					<h3>January 2020</h3>
					<h4>Grant</h4>
			</div>
			<div class="col-md-6 w3-edu-info2">
				<h3>A preliminary study on the Hot spring water in Bangladesh</h3>
					<h4><i style="color: #fff;" class="fas fa-award fa-2x"></i><span>BDT 50,000</span></h4>
					<p>Funding agency:
						GETE Research Center, Dhaka, Bangladesh
						<br>
						Principal investigators:
						<br>
						ABM Rafiqul Islam, Bangladesh University of Health Sciences, Dhaka, Bangladesh </p>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-4 w3-edu-info1">
			<h3>December 2019</h3>
					<h4>Grant</h4>

			</div>
			<div class="col-md-6 w3-edu-info2">
				<h3>Grants for AGU Fall meeting 2019, San Francisco, USA</h3>
					<h4><i style="color: #fff;" class="fas fa-award fa-2x"></i><span>USD 1,000</span></h4>
					<p>Funding agency:
						<br>
						NEXT Group, Tokyo, Japan
						<br>
						Research institution:
						<br>
						Bangladesh University of Health Sciences, Dhaka, Bangladesh
						<br>
						Principal investigators:
						<br>
						ABM Rafiqul Islam</p>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-4 w3-edu-info1">
			<h3>October 2000</h3>
					<h4>scholarships</h4>

			</div>
			<div class="col-md-6 w3-edu-info2">
				<h3>Japanese Ministry of Education Science and Culture (monbu kagaku shou)</h3>
					<h4><i style="color: #fff;" class="fas fa-award fa-2x"></i><span>Ph.D</span></h4>
					<p>Japanese Ministry of Education Science and Culture</p>

			</div>
			<div class="clearfix"></div>
			</div>
			<div class="col-md-6 w3-edu-grid-right">
			<div class="w3-edu-grid-header">
			<h3>Education</h3>
			</div>
				<div class="col-md-3 w3-edu-info-right1">
					<h3>November 2008</h3>
			</div>
			<div class="col-md-9 w3-edu-info-right2">
				<h3>Environmental Safety Research Center</h3>
					<h4>The University of Tokyo</h4>
					<h4>Hongo, Bunkyo-Ku, Tokyo</h4>
					<h4>Environmental Safety</h4>

			</div>
			<div class="clearfix"></div>
			<div class="col-md-3 w3-edu-info-right1">
				<h3>December 2001</h3>
			</div>
			<div class="col-md-9 w3-edu-info-right2">
				<h3>JEOL, Japan</h3>
					<h4>Kanazawa, Japan </h4>
					<h4>Training on SEM Technology</h4>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-3 w3-edu-info-right1">
			<h3>October 2000 - September 2003</h3>
			</div>
			<div class="col-md-9 w3-edu-info-right2">
				<h3>Kanazawa University</h3>
					<h4>Kanazawa, Japan</h4>
					<h4>Ph.D</h4>
					<h4>Environmental Science and Engineering (Biogeochemistry)</h4>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-3 w3-edu-info-right1">
				<h3>April 1998 - March 2000</h3>
				</div>
				<div class="col-md-9 w3-edu-info-right2">
					<h3>Kanazawa University</h3>
						<h4>Kanazawa, Japan</h4>
						<h4>Masters</h4>
						<h4>Environment and Health based Chemistry Education (Curriculum)</h4>
				</div>
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	</div>
	</div>
<!-- //education -->
<!-- skills -->
<div class="skills" id="skills">
	<div class="container">
	    <div class="title-w3ls">
		<h4>Professional Experiences</h4>
		</div>
		<div class="skills-bar">
            @if(count($skills) > 0)
            @foreach($skills as $skill)
			<div class="col-md-6 w3-agile-skills-grid">
				<section class='bar'>
            	    <section class='wrap'>
					    <div class='wrap_right'>
					  	    <div class='bar_group'>
							    <div class="col-md-9 w3-edu-info-right2">
                                    <h3>{{$skill->company_name}}</h3>
                                    @if(!Auth::guest())
                                        @if(Auth::user()->id == $skill->user_id)
                                            <form action="{{ route('skills.destroy',$skill->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('skills.edit', $skill->id)}}" class="btn btn-info">Edit</a>
                                                <button type="submit" class="btn btn-danger float-right">Delete</button>
                                            </form>
                                        @endif
                                    @endif
                                        <h4>{{$skill->from}} to {{$skill->to}} </h4>
                                        <h4>Department: {{$skill->department}}</h4>
                                        <h4>Position: {{$skill->position}}</h4>
                                        <h4>Location: {{$skill->location}}</h4>
                                        <p>Description: {{$skill->duty}}</p>
							    </div>
						    </div>
					    </div>
					<div class="clearfix"></div>
				    </section>
				</section>
			</div>
            @endforeach
            @endif
		    <div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //skills -->
<!-- contact -->
<div class="contact" id="contact">
	<div class="container">
		<div class="w3ls-heading">
			<h3>Company Overview</h3>
		</div>
        <div class="contact-w3ls">
            @if(count($items) > 0)
            @foreach ($items as $item)
                <div class="col-md-6 col-sm-12 contact-right agileits-w3layouts">
                    <h1 style="color: #fff; text-align: center;">{{$item->name}}
                    @if(!Auth::guest())
                        @if(Auth::user()->id == $item->user_id)
                            <form action="{{ route('items.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{route('items.edit', $item->id)}}" class="btn btn-info">Edit</a>
                                <button type="submit" class="btn btn-danger float-right">Delete</button>
                            </form>
                        @endif
                    @endif
                    </h1>
                    <h3 style="color: #fff; text-align: center;">{{$item->location}}</h3>
                    <h3 style="color: #fff; text-align: center;">{{$item->work}}</h3>
                    <h3 style="color: #fff; text-align: center;">{{$item->duty}}</h3>
                </div>
            @endforeach
            @endif
            <div class="clearfix"></div>
        </div>
	</div>
</div>
<!-- //contact -->
<!-- main-content -->
<div class="main-content">
		<!-- gallery -->
	<div class="gallery" id="projects">
		<div class="w3-gallery-head">
			<h3>My projects</h3>
		</div>
	    <div class="container">
		    <div class="gallery_gds">
			    <ul class="simplefilter ">
                    <li class="active" data-filter="all">All</li>
                    <li data-filter="1">Article</li>
                    <li data-filter="2">Presentation</li>
                    <li data-filter="3">Conference Paper</li>
                </ul>
			    <div class="filtr-container" style="padding: 0px; position: relative; height: 858px;">
                    <!-- one -->
                    @if(count($projects) > 0)
                    @foreach ($projects as $project)
                        <div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="{{$project->article}}" data-sort="Busy streets" style="opacity: 1; transform: scale(1) translate3d(0px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                            <div class="jm-item-wrapper">
                                <div class="jm-item-image">
                                    <img src="<?php echo asset("storage/project_images/$project->project_image")?>" alt="{{$project->image}}"/>
                                    <span class="jm-item-overlay"> </span>
                                    <div class="jm-item-button"><a href="#"  data-toggle="modal" data-target="#{{$project->id}}">View Details</a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endif
                    <div class="clearfix"></div>
                </div>
		    </div>
	    </div>
    </div>
	<!--//gallery-->
</div>
<!-- //main-content -->
@if(count($projects) > 0)
@foreach ($projects as $project)
<div class="modal fade" id="{{$project->id}}" tabindex="-1" role="dialog" >
    <div class="modal-dialog">
    <!-- Modal content-->
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="w3ls-property-images">
            <img src="/storage/project_images/{{$project->project_image}}" alt="{{$project->project_image}}" />
        </div>
        <div class="ins-details">
            <div class="ins-name" style="width: 300px;">
                <h3>{{$project->title}}</h3>
                <p>{{$project->body}}</p>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@endforeach
@endif
    <!-- Kick off Filterizr -->
    <script type="text/javascript" src="{{ URL::asset('front/js/jquery.filterizr.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            //Initialize filterizr with default options
            $('.filtr-container').filterizr();
        });
    </script>

<!-- footer -->
	<div class="w3l_footer">
		<div class="container">
			<div class="w3ls_footer_grids">
				<div class="w3ls_footer_grid">
					<div class="col-md-4 w3ls_footer_grid_left">
						<div class="w3ls_footer_grid_leftl">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="w3ls_footer_grid_leftr">
                            <h4>Location</h4>
                            @if(count($posts) > 0)
							@foreach ($posts as $post)
                            <p>{{$post->location}}</p>
                            @endforeach
                            @endif
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 w3ls_footer_grid_left">
						<div class="w3ls_footer_grid_leftl">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="w3ls_footer_grid_leftr">
                            <h4>Email</h4>
                            @if(count($posts) > 0)
							@foreach ($posts as $post)
                            <p>{{$post->email}}</p>
                            @endforeach
                            @endif
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 w3ls_footer_grid_left">
						<div class="w3ls_footer_grid_leftl">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="w3ls_footer_grid_leftr">
							<h4>Call Me</h4>
							<p>N/A</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="w3l_footer_pos">
			<p>© 2017 UttamBangla. All Rights Reserved |  Developed by <a href="https://www.linkedin.com/in/tanjim-ahmed-a32979126/">Tanjim Ahmed</a></p>
		</div>
	</div>
@endsection
