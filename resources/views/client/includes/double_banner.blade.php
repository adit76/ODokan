<div class="double_banner">

  <div class="double_banner__container double_banner__container__wide" style="background: url('http://onthemill.com/img/static/man_6.jpg'); flex-grow: 2;">
    <!-- 500 / 250px Background-->
    <!-- 800 / 250px Background for double_banner__container__wide-->
    <div class="double_banner__title">
      Men's Collection for Real Mens
    </div>

    <div class="btn btn-primary double_banner__btn">VIEW COLLECTION</div>
  </div>

  <div class="double_banner__container" style="background: url('http://onthemill.com/img/static/girl_5.jpg');">
    <div class="double_banner__title">
      Women's Collection
    </div>

    <div class="btn btn-primary double_banner__btn">VIEW COLLECTION</div>
  </div>

</div>

<style>
  .double_banner{
    display: flex;
    justify-content: space-around;
    justify-content: space-evenly;
    align-items: center;
    padding: 30px 0;
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
    margin-top: 120px;
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
</style>
