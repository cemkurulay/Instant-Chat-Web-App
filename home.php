<div class="row " style="margin : 0px ; padding : 0px">
    <div class="col s12" style="background-color : pink; height : 500px ; margin : 0px ; padding : 0px">
    </div>
</div>

<div class="row" style="margin : 0px ; padding : 0px">
    <form class="col s12 " style="background-color : lightgreen ; margin : 0px ; padding : 0px">
      <div class="row " style="margin : 0px ; padding : 0px">
        <div class="input-field col s8" style="background-color : white ; margin-left : 20px;">
          <input id="icon_prefix" type="text" class="validate">
        </div>
        <div class="col s3 center-align ">
            <button class="btn waves-effect waves-light" style="margin-top:30px;" type="submit" name="action">Send
                <i class="material-icons right">send</i>
            </button>
        </div>
      </div>
    </form>
  </div>

  <div id="add_nick" class="modal">
  <form action="?page=register" method="post" >
    <div class="modal-content">
        <h5>Choose a Nick</h5>
        <div class="input-field">
          <input id="nickname" type="text" name="nickname">
        </div>
      <div class="modal-footer">
        <button  class="btn waves-effect waves-light" type="submit" name="action">OK
         <i class="material-icons right">send</i>
        </button>
      </div>
    </div>
  </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems);

        elems = document.querySelectorAll('select');
        M.FormSelect.init(elems);
    });


    $(function(){
       // page is loaded
       //alert("jquery works");
       $('#add_nick').modal('open');

    });

  </script>