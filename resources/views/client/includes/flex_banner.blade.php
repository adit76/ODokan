<?php

	$menswears=DB::table('mens_wear')->orderBy('id','desc')->limit(1)->get();
	$ladieswears=DB::table('ladies_wear')->orderBy('id','desc')->limit(1)->get();
	$tshirts=DB::table('tshirts')->orderBy('id','desc')->limit(1)->get();
	$desiredbrands=DB::table('desiredbrands')->orderBy('id','desc')->limit(1)->get();
?>


<div class="banner_flex_container container">
	@foreach($menswears as $menswear)
	<div class="banner_flex_container__one" style="background:url('/flex_menswear/{{$menswear->mens_wear_image}}'); height:550px; width:590px;">
		<!-- 500 x 500 -->
    <p> Mens Wear </p>
    <a class="btn btn-primary btn-lg btn-banner" href="/menswear"> Buy </a>
  </div>
	@endforeach


    <div class="banner_flex_container__two">
    	<!-- <div class="banner_flex_container__two__one">
				@foreach($ladieswears as $ladieswear)
    		    <div class="banner_flex_container__two__one__one" style="background:url('/flex_ladieswear/{{$ladieswear->ladies_wear_image}}')">
              <p> Ladies Wear </p>
              <a class="btn btn-primary btn-lg" href="/ladieswear"> Buy </a>
          	</div>
					@endforeach

					@foreach($tshirts as $tshirt)
            <div class="banner_flex_container__two__one__two" style="background:url('/flex_tshirts/{{$tshirt->tshirts_image}}')" >
              <p> T-Shirts </p>
              <button class="btn"> Buy </button>
          	</div>
						@endforeach
      	</div> -->

				@foreach($ladieswears as $ladieswear)
  		    <div class="banner_flex_container__two__two" style="background:url('/flex_ladieswear/{{$ladieswear->ladies_wear_image}}')">
            <p> Ladies Wear </p>
            <a class="btn btn-primary btn-lg btn-banner" href="/ladieswear"> Buy </a>
        	</div>
				@endforeach

				@foreach($desiredbrands as $desiredbrand)
        <div class="banner_flex_container__two__two" style="background: url('/flex_desired_brands/{{$desiredbrand->desired_brands_image}}')">
          <p> Desired Brands </p>
          <a class="btn btn-primary btn-lg btn-banner" href="/desiredbrands"> Buy </a>
        </div>
				@endforeach
    </div>
</div>


<style>
	.banner_flex_container{
    	display: flex;
        justify-content: center;
        align-items: center;
        flex-flow: row;
        flex-wrap: wrap;
        /* background: #EEEEEE; */
        padding-top: 20px;
        padding-bottom: 20px;
    }

		.banner_flex_container.container{
			padding-left: 0 !important;
			padding-right: 0 !important;
		}

  .banner_flex_container p{
    font-size: 5em;
    font-family: 'Raleway', sans-serif;
    font-weight: 700;
    color: white;
    padding-top: 60%;
    padding-left: 10px;
    box-sizing: border-box;
  }
  .banner_flex_container__two__one p, .banner_flex_container__two__two p{
    font-size: 1.5em;
    color: black;
  }

  .banner_flex_container__two__one:hover p, .banner_flex_container__two__two:hover p{
    color: teal !important;
  }

  .banner_flex_container__two__two p{
    padding-top: 10% !important;
  }

  .banner_flex_container__two__two:hover p{
    padding-top: 11% !important;
  }

  .banner_flex_container div{
    cursor: pointer;
  }

  .banner_flex_container div p{
    transition: all 0.3s ease;
  }

  .banner_flex_container div:hover > p{
    color: lightblue;
    padding-top: 59%;
  }

  .banner_flex_container div button{
    border: 2px solid white;
    font-size: 1.3em;
    border-radius: 0;
    background: transparent;
    color: white;
    margin-left: 15px;
    transition: all 0.8s ease;
  }

  .banner_flex_container__two__one button , .banner_flex_container__two__two button{
    color: black !important;
    border:2px solid black !important;
  }

  .banner_flex_container div button:hover{
    background: white;
    border: 2px solid lightblue;
    color: black;
  }



	.banner_flex_container__one{
  	/* width: 550px; */
		width: 590px;
    height: 550px;
		/* margin: 10px; */
    /* filter: grayscale(1); */
    background-size: cover !important;
    background-repeat: no-repeat !important;
    transition: all 0.3s ease;
    }

    .banner_flex_container__one:hover{
      filter: none;
    }

    .banner_flex_container__two{
    	width: 550px;
        height: 550px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-flow: column;
        flex-wrap: wrap;
    }

    .banner_flex_container__two__one{
    	display: flex;
        justify-content: center;
        align-items: center;
        flex-flow: row;
        flex-wrap: wrap;
    }

    .banner_flex_container__two__one__one{
    	width: 275px;
        height: 275px;
      background-size: cover !important;
      background-repeat: no-repeat !important;
			border: 1px solid white;
      /* filter: grayscale(1); */
    }

    .banner_flex_container__two__one__one:hover{
      filter: none;
    }

    .banner_flex_container__two__one__two{
    	width: 275px;
        height: 275px;
      background-size: cover !important;
      background-repeat: no-repeat !important;
			border: 1px solid white;
      /* filter: grayscale(1); */
    }

    .banner_flex_container__two__one__two:hover{
      filter: none;
    }

    .banner_flex_container__two__two{
    	width: 550px;
      height: 275px;
      background-size: cover !important;
      background-repeat: no-repeat !important;
      /* filter: grayscale(1); */
    }

    .banner_flex_container__two__two:hover{
      filter: none;
    }




    @media screen and (max-width: 1235px){
        .banner_flex_container__one{
            width: 500px;
            height: 500px;
        }

        .banner_flex_container__two{
            width: 500px;
            height: 500px;
        }

        .banner_flex_container__two__one{

        }

        .banner_flex_container__two__one__one{
            width: 250px;
            height: 250px;
        }

        .banner_flex_container__two__one__two{
            width: 250px;
            height: 250px;
        }

        .banner_flex_container__two__two{
            width: 500px;
            height: 250px;
        }
    }

		@media screen and (max-width: 768px){
			.banner_flex_container.container{
				padding-left: 15px !important;
				padding-right: 15px !important;
			}
		}

    @media screen and (max-width: 1030px){
        .banner_flex_container__one{
            width: 400px;
            height: 400px;
        }

        .banner_flex_container__two{
            width: 400px;
            height: 400px;
        }

        .banner_flex_container__two__one{

        }

        .banner_flex_container__two__one__one{
            width: 155px;
            height: 200px;
        }

        .banner_flex_container__two__one__two{
            width: 200px;
            height: 200px;
        }

        .banner_flex_container__two__two{
            width: 360px;
            height: 200px;
        }

        .banner_flex_container{
          overflow: hidden;
        }

        .banner_flex_container p{
          font-size: 3em;
          padding-top: 50%;
        }
        .banner_flex_container__two__one p, .banner_flex_container__two__two p{
          font-size: 1em;
        }
    }

    @media screen and (max-width: 350px){
    	.banner_flex_container__two{
            width: 300px;
            height: 750px;
        }

    	.banner_flex_container__two__one{
            flex-flow: column;
        }

        .banner_flex_container__two__one__one{
            width: 300px;
            height: 300px;
        }

        .banner_flex_container__two__one__two{
          width: 300px;
          height: 300px;
        }
    }
</style>
