<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <!--İnitialize Libraries -->
    <link  rel="stylesheet" type="text/css" href="./css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Validation library file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/af-2.6.0/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/cr-1.7.0/date-1.5.1/fc-4.3.0/fh-3.4.0/kt-2.10.0/r-2.5.0/rg-1.4.1/rr-1.4.1/sb-1.6.0/sp-2.2.0/sl-1.7.0/sr-1.3.0/datatables.min.css" rel="stylesheet">
 
 <script src="https://cdn.datatables.net/v/dt/dt-1.13.6/af-2.6.0/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/cr-1.7.0/date-1.5.1/fc-4.3.0/fh-3.4.0/kt-2.10.0/r-2.5.0/rg-1.4.1/rr-1.4.1/sb-1.6.0/sp-2.2.0/sl-1.7.0/sr-1.3.0/datatables.min.js"></script>
 
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


       <title>Archive</title>
</head>


<body>
    <!--Header -->
<header>
    <div class="container">
        <h5>ARCHIVE PROGRAM</h5>
    </div>
</header>
<!--Buton Group -->
<div class="butongroup">
<button type="button" class="btn btn-primary btn-lg" onclick="redirect()">VINYL</button>
<button type="button" class="btn btn-primary btn-lg">GAME</button>

</div>

<div class="tabledivgame">
  
  </form>
<table id="gametable" class="display" style="width:102%">
<thead>
       
            <tr>
                
                <th></th>
                <th>Name</th>
                <th>Genre</th>
                <th>Platform</th>
                <th>Exclusive</th>
                <th>Meta Score/100</th>
                <th>User Score/10</th>
                <th>My Score/10</th>
                <th>Release Date</th>
               <!-- <th>Platform</th>
                <th>Trailer</th>-->              
            </tr>
        </thead> 
         
</table>


</div>


<!--add game modal -->
<div class="modal" id="addgamemodal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Game</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="addgameform">
    
    <div class="col-10"><label class="col-6" for="gameName"><b>Game Name</b></label>
    <input type="text" id="gameName" name="name" class="form-control"/></div>

    
    <div class="col-10" ><label class="col-6" for="gameGenre"><b>Genre</b></label>
    <select class="js-example-basic-multiple" name="genre[]" multiple="multiple">
      
  <option value="Action">Action</option>
  
  <option value="Rpg">Rpg</option>

  <option value="Fps">Fps</option>
                    <option value="Moba">Moba</option>
                    <option value="Platform">Platform</option>
</select>
</div>
    

<div class="col-10" ><label class="col-6" for="gamePlatform"><b>Platform</b></label>
    <select class="js-example-basic-multiple-platform" name="platform[]" multiple="multiple">
    <option value="PS1">PS1</option>
    <option value="PS2">PS2</option>
    <option value="PS3">PS3</option>
    <option value="PS4">PS4</option>
    <option value="PS5">PS5</option>
    <option value="XBOX">XBOX</option>
    <option value="NINTENDO">NINTENDO</option>
  
</select>
</div>
    




   
    <div class="col-10"><label class="col-6" for="developerName"><b>Developer Name</b></label>
    <input type="text" id="developerName" name="developer" class="form-control"/></div>

    <div class="col-10"><label class="col-6" for="publisherName"><b>Publisher Name</b></label>
    <input type="text" id="publisherName" name="publisher" class="form-control"/></div>
    
    
    
            <div class="col-10" ><label class="col-6" for="gameExclusive"><b>Exclusive</b></label>
            <select name ="exclusive" id="gameExclusive" class="form-control">
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                    </select>
            </div>

    <div class="col-10"><label class="col-6" for="metaScore"><b>Meta Score</b></label>
    <input type="text" id="metaScore" name="metascore" class="form-control"/></div>

    <div class="col-10"><label class="col-6" for="userScore"><b>User Score</b></label>
    <input type="text" id="userScore" name="userscore" class="form-control"/></div>

    <div class="col-10"><label class="col-6" for="myScore"><b>My Score</b></label>
    <input type="text" id="myScore" name="myscore" class="form-control"/></div>

  <div class="col-10" ><label class="col-6" for="gamecompleteUpdate"><b>Completion Status</b></label>
            <select name ="completionstatus" id="gamecompleteUpdate" class="form-control">
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                    <option value="NOT YET">NOT YET</option>
                    </select>
            </div>

    <div class="col-10" ><label class="col-6" for="gameReleaseDate"><b>Game Release Date</b></label>
    <input type="date" id="gameReleaseDate" name="releasedate"  min="1970-01-01" max="2800-12-31" class="form-control"/></div>
    



      </form>
      
      </div>
      <div class="modal-footer">
        <button type="button" id="addbtnsave" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- update modal -->

<div class="modal" id="updatemodal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update Game</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="updategame">
      <input type="hidden" id="idupdate" class ="idupdate" name="id"  />

      <div class="col-10"><label class="col-6" for="gameNameUpdate"><b>Game Name</b></label>
     <input type="text" id="gameNameUpdate" name="name" class="form-control"/></div>

    
    <div class="col-10" ><label class="col-6" for="gameGenreUpdate"><b>Genre</b></label>
    <select class="js-example-basic-multiple" id="gameGenreUpdate" name="genre[]" multiple="multiple">
      <option value="Action">Action</option>
      <option value="Rpg">Rpg</option>
      <option value="Fps">Fps</option>
      <option value="Moba">Moba</option>
      <option value="Platform">Platform</option>
    </select>
  </div>


    <div class="col-10" ><label class="col-6" for="gamePlatformUpdate"><b>Platform</b></label>
    <select class="js-example-basic-multiple-platform" id="gamePlatformUpdate" name="platform[]" multiple="multiple">
      <option value="PS1">PS1</option>
      <option value="PS2">PS2</option>
      <option value="PS3">PS3</option>
      <option value="PS4">PS4</option>
      <option value="PS5">PS5</option>
      <option value="XBOX">XBOX</option>
      <option value="NINTENDO">NINTENDO</option>
    </select>
  </div>
    
    
   
    <div class="col-10"><label class="col-6" for="developerNameUpdate"><b>Developer Name</b></label>
    <input type="text" id="developerNameUpdate" name="developer" class="form-control"/></div>

    <div class="col-10"><label class="col-6" for="publisherNameUpdate"><b>Publisher Name</b></label>
    <input type="text" id="publisherNameUpdate" name="publisher" class="form-control"/></div>
    
    
    
            <div class="col-10" ><label class="col-6" for="gameExclusiveUpdate"><b>Exclusive</b></label>
            <select name ="exclusive" id="gameExclusiveUpdate" class="form-control">
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                    </select>
            </div>

    <div class="col-10"><label class="col-6" for="metaScoreUpdate"><b>Meta Score</b></label>
    <input type="text" id="metaScoreUpdate" name="metascore" class="form-control"/></div>

    <div class="col-10"><label class="col-6" for="userScoreUpdate"><b>User Score</b></label>
    <input type="text" id="userScoreUpdate" name="userscore" class="form-control"/></div>

    <div class="col-10"><label class="col-6" for="myScoreUpdate"><b>My Score</b></label>
    <input type="text" id="myScoreUpdate" name="myscore" class="form-control"/></div>

   

    <div class="col-10" ><label class="col-6" for="gamecompleteUpdate"><b>Completion Status</b></label>
            <select name ="completionstatus" id="gamecompleteUpdate" class="form-control">
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                    <option value="NOT YET">NOT YET</option>
                    </select>
            </div>
  <div class="col-10" ><label class="col-6" for="gameReleaseDateUpdate"><b>Game Release Date<b><label>
    <input type="date" id="gameReleaseDateUpdate" name="releasedate"  min="1970-01-01" max="2800-12-31" class="form-control"/></div>
    

      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="updategamebutton">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<script>

   
   function format(d) {
    return (
       
        '<b>Developer Name: </b>' +
        d.developer +
        '<br>' +
        '<b>Publisher: </b>' +
        d.publisher +
        '<br>' +
        '<b>Completion Status: </b>' +
        d.completionstatus +
        '<br>'
         
        
    );
}


  let table = $('#gametable').DataTable
  ({
    dom: 'Blrftip',
    
    paging:true,
    serverSide:true,
   // processing:true,
    select: {
      style: 'multi'
    },
    rowId: 'id',
    stateSave: true,
    select: true,
    infoCallback: function( settings, start, end, max, total, pre ) {
    var api = this.api();
    var pageInfo = api.page.info();
 
    return 'Page '+ (pageInfo.page+1) +' of '+ pageInfo.pages + ' Total Record ' + total;
  },
   
 

    buttons: [
       { 
        text: 'New',
        id:'newbutton',
        action: function ( e, dt, node, config ) {
          $('#addgamemodal').modal('show')
        }
    },
    {
        text: 'Update',
        action: function ( e, dt, node, config ) {
            var $rows = table.$('tr.selected');
        if($rows.length){
            $('#updatemodal').modal('show')
            id=table.rows( { selected: true }).data()[0]['id'];
          name=table.rows( { selected: true }).data()[0]['name'];
          genre=table.rows( { selected: true }).data()[0]['genre'];
          platform=table.rows( { selected: true }).data()[0]['platform'];
          developer=table.rows( { selected: true }).data()[0]['developer'];
          publisher=table.rows( { selected: true }).data()[0]['publisher'];
          exclusive=table.rows( { selected: true }).data()[0]['exclusive'];
          metascore=table.rows( { selected: true }).data()[0]['metascore'];
          userscore=table.rows( { selected: true }).data()[0]['userscore'];
          myscore=table.rows( { selected: true }).data()[0]['myscore'];
          completionstatus=table.rows( { selected: true }).data()[0]['completionstatus'];
          releasedate=table.rows( { selected: true }).data()[0]['releasedate'];
         
          genre=genre.split(',');
          platform=platform.split(',');
    
          
          
        
          $('#idupdate').val(id).trigger("change");
         
          $('#gameNameUpdate').val(name).trigger("change");
         
          $('#gameGenreUpdate').val(genre).trigger("change");

          $('#gamePlatformUpdate').val(platform).trigger("change");
   
          
          $('#developerNameUpdate').val(developer).trigger("change");
          
          
          $('#publisherNameUpdate').val(publisher).trigger("change");

          $('#gameExclusiveUpdate').val(exclusive).trigger("change");

          $('#metaScoreUpdate').val(metascore).trigger("change");

          $('#userScoreUpdate').val(userscore).trigger("change");

          $('#myScoreUpdate').val(myscore).trigger("change");
          
          $('#gamecompleteUpdate').val(completionstatus).trigger("change");

          $('#gameReleaseDateUpdate').val(releasedate).trigger("change");

     
        }else{
          swal.fire("Please choose Game!");
        }
      }
      
    },
    {
      text: 'Delete',
      action: function ( e, dt, node, config ) {
      var $rows = table.$('tr.selected');
      if($rows.length){
      let id=table.rows( { selected: true }).data()[0].id;                                         
      swal.fire({
      type:"success",
      icon: "warning",
      buttons: true,
      showConfirmButton:true,
      showCancelButton:true,
      confirmButtonText:"Confirm",
      html:"Are you sure to delete this vinyl?",
      title:"warning"
    })
    .then((willDelete) => {
      if (willDelete.value) {
        $.ajax({
        url: "<?= site_url('GameController/delete') ?>",
        type: "POST",
        cache: false, 
        data: {'id':id},
        processData: true,
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        dataType: "JSON"
      });
      location.reload();
    } else {
      swal.fire("Your game is safe!");
    }
  }); 
}else{
  swal.fire("Please choose Game!");
}
}
    },
     {
                extend: 'csv',
                split: [ 'csv','copy', 'print'],
    }
    ],
    //define data
columns: [
   { class: 'dt-control',
            orderable: false,
            data: null,
            defaultContent: ''
            
            
   },
  { data: "name"},
  { data: "genre" },
  { data: "platform" },

 // { data: "developer" },
 //{ data: "publisher" },

  { data: "exclusive" }, 
  { data: "metascore" },
  {data: "userscore"},
  {data:"myscore"},
  {data:"completionstatus"},
 // {data:"releasedate"}
],
//show data over table ajax
ajax: {
  url: "<?= site_url('GameController/showgamedata') ?>",
  
  dataSrc: 'data'
}


});

//table.columns( [7,8] ).visible( false );
///////////////////
const detailRows = [];
 
table.on('click', 'tbody td.dt-control', function () {
    let tr = event.target.closest('tr');
    let row = table.row(tr);
    let idx = detailRows.indexOf(tr.id);
 
    if (row.child.isShown()) {
        tr.classList.remove('details');
        row.child.hide();
 
        // Remove from the 'open' array
        detailRows.splice(idx, 1);
    }
    else {
        tr.classList.add('details');
        row.child(format(row.data())).show();
 
        // Add to the 'open' array
        if (idx === -1) {
            detailRows.push(tr.id);
        }
    }
});


// On each draw, loop over the `detailRows` array and show any child rows
table.on('draw', () => {
    detailRows.forEach((id, i) => {
        let el = document.querySelector('#' + id + ' td.dt-control');
 
        if (el) {
            el.dispatchEvent(new Event('click', { bubbles: true }));
        }
    });
});
//add game
$("#addbtnsave").click(function(){
 
 let meta_score=$("#metaScore").val();
 let user_score=$("#userScore").val();
 let my_score=$("#myScore").val();
 alert(meta_score);
 if(meta_score>100 || user_score>10 || my_score>10)
 {
 
  Swal.fire({
  title: "Alert!",
  text: "Your score is not valid!!! Please enter valid score! (Enter between 0-100 for Meta Score,Enter between 0-10 for User Score,Enter between 0-10 for My Score)",
  icon: "question"
});
  
}else{
 
  
  $.ajax({
    url: "<?= site_url('/GameController/add_game') ?>",
    type: "POST",
    data: $('#addgameform').serialize(),
    processData: true,
    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
    dataType: "JSON",
    success: function(data) {
      if (data.success == true) {
        location.reload();
        swal.fire("Your game added");
      }
    },
    error: function(jqXHR, textStatus, errorThrown) {
      location.reload();
      swal.fire("Your vinyl added");
    }
  });
}
});

//update
$('.updategamebutton').click(function() {
  var formData = $("#updategame").serialize();
  let meta_scoreu=$("#metaScoreUpdate").val();
 let user_scoreu=$("#userScoreUpdate").val();
 let my_scoreu=$("#myScoreUpdate").val();

 alert(formData);
 if(meta_scoreu>100 || user_scoreu>10 || my_scoreu>10)
 {
 
  Swal.fire({
  title: "Alert!",
  text: "Your score is not valid!!! Please enter valid score! (Enter between 0-100 for Meta Score,Enter between 0-10 for User Score,Enter between 0-10 for My Score)",
  icon: "question"
});
  
}else{
 
  $.ajax({
    url: "<?= site_url('GameController/update') ?>",
    type: "POST",
    data: formData,
    processData: true,
    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
    dataType: "JSON",
    success: function(data) {
      if (data.success == true) {
        location.reload();
      }
    },
    error: function(jqXHR, textStatus, errorThrown) {
      location.reload();
      swal.fire({
        type:"success",
        icon: "warning",
        buttons: true,
        showConfirmButton:true,
        showCancelButton:true,
        confirmButtonText:"Confirm",
        html:"Game is Updated",
        title:"warning"
      })
    }
  });
}
});


function redirect()
{
    let url = "http://localhost:8080/Home";
    window.location.assign(url);
}

$(document).ready(function() {
    $('.js-example-basic-multiple-platform').select2(
      {width: '100%',theme: 'classic',maximumSelectionSize: 6 ,multiple:true },
      
    );
});

$(document).ready(function() {
    $('.js-example-basic-multiple').select2(
      {width: '100%',maximumSelectionSize: 6 ,multiple:true}
    );
});

    </script>
    </body>
</html>