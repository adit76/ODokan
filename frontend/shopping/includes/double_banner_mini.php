<div class="double_banner">

  <div class="double_banner__container" style="background: url('http://onthemill.com/img/static/man_6.jpg');">
    <!-- 500 / 250px Background-->
    <!-- 800 / 250px Background for double_banner__container__wide-->
    <div class="double_banner__title">
      New Fashion<br/>Trends
    </div>

    <div class="btn btn-primary double_banner__btn">SHOP NOW</div>
  </div>

  <div class="double_banner__container" style="background: url('http://onthemill.com/img/static/girl_5.jpg');">
    <div class="double_banner__title">
      New Women's<br/>Collection
    </div>

    <div class="btn btn-primary double_banner__btn">SHOP NOW</div>
  </div>

  <!-- <div class="double_banner__container" style="position: relative;">
    <iframe class="ad_video" width="500" height="250" src="https://www.youtube.com/embed/C0DPdy98e4c?controls=0" frameborder="0" allow="encrypted-media;" allowfullscreen style="position: absolute;top: 0;left: 0;"></iframe>
  </div> -->

</div>

<style>
  .double_banner{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    justify-content: space-evenly;
    align-items: center;
    padding: 30px 0;

    background: #EFEFEF;
  }

  .double_banner__container{
    padding: 10px;
    min-width: 500px;
    max-width: 500px;
    height: 250px;
    /* border: 2px solid black; */
    font-family: "Montserrat", sans-serif;
    flex: 1;
    background-size: cover !important;
    background-repeat: no-repeat !important;
  }

  .double_banner__container__wide{
    flex-grow: 2;
    max-width: 800px;
  }

  .double_banner__title{
    font-size: 1.6em;
    margin-top: 100px;
    width: 50%;
  }

  .double_banner__btn{
    background: transparent;
    border: 2px solid black;
    border-radius: 0;
    color: black;
    transition: all 0.3s ease;
    margin-top: 10px;
  }

  .double_banner__btn:hover{
    background: #0cd4d2;
  }

  @media screen and (max-width: 500px){
    .double_banner__container{
      min-width: 350px;
      max-width: 350px;
      height: 175px;
    }

    .double_banner__title{
      font-size: 1.2em;
      margin-top: 20px;
    }

    .ad_video{
      padding-top: 20px;
      width: 350px;
      height: 175px;
    }

  }
</style>
