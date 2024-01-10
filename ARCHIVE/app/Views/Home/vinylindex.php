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
<button type="button" id="addvinylbutton" class="btn btn-primary btn-lg" >VINYL</button>
<button type="button" class="btn btn-primary btn-lg" onclick="redirect()">GAME</button>

</div>
<!--Datatable -->
<div class="tablediv">
<table id="example" class="display" style="width:100%">
<select id="searchComboBox">
  <option value="">All</option>
  <option value="Pop">Pop</option>
  <option value="Game Soundtrack">Game Soundtrack</option>
  <option value="Rock">Rock</option>
  <option value="Country">Country</option>
  <option value="Rock">Rock</option>
  <option value="Movie Soundtrack">Movie Soundtrack</option>
  <option value="Enstrumental">Enstrumental</option>
  <option value="Classic">Classic</option>
  <option value="Blues">Blues</option>
  <option value="Electronic Music">Electronic Music</option>
  <option value="Jazz">Jazz</option>
  <option value="Hip Hop">Hip Hop</option>
  <option value="Rap">Rap</option>
  <option value="Launge">Launge</option>
  <option value="R&B">R&B</option>
  <option value="Reggea">Reggea</option>
  <option value="Latin">Latin</option>
</select><br><br>

        <thead>
       
            <tr>
                
                
                <th>Vinyl Albüm Name</th>
                <th>Vinyl Artist Name</th>
                <th>Vinyl Type</th>
                <th>Vinyl Release Date</th>
                <th>Comment</th> 
                <th>youtubelink</th>
                <th>spotifylink</th>               
               
                
            </tr>
        </thead> 
         
</table>


<!-- card -->
<div class="card" style="width: 18rem;">
<!--<img class="card-img-top" src="..." alt="Card image cap">-->
  <div class="card-body">
    <h5 class="card-title">Vinyl Information</h5>
  
  </div>
 <ul class="list-group list-group-flush">
    <li class="list-group-item" >Vinyl Album Name :<input class="vinylAlbumNamecard" readonly="readonly"><b></b></input></li>
    <li class="list-group-item">Vinyl Artist : <input class="vinylArtistNamecard" readonly="readonly"><b></b></input></li>
    <li class="list-group-item">Vinyl Release Date : <input class="vinyldateNamecard" readonly="readonly"><b></b></input></li>
  </ul>
  <div class="card-body">

    <a href="" class="card-link" id="youtubehref">Youtube Music</a>
    <a href="#" class="card-link" id="spotifyhref">Spotify </a>
  </div>
</div>
</div>


<!--Modal for Link -->
<div class="modal" id="link" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Link</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="linkform">
      <input type="hidden" id="idlink" class ="idlink" name="vinyl_id"  />

      <div class="col-8"><label class="col-6" for="vinyYoutubeLinkName"><b>Youtube Vinyl Link</b></label>
        <input type="text" id="vinyYoutubeLinkName" name="linkyoutube" class="form-control"/></div><br>

        <div class="col-8"><label class="col-6" for="vinySpotifyLinkName"><b>Spotify Vinyl Link</b></label>
        <input type="text" id="vinySpotifyLinkName" name="linkspotify" class="form-control"/></div>
        
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="linkbutton">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--Modal for Add Vinyl -->
<div class="modal" id="add" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Vinyl</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="addvinylform">
      <div class="col-8"><label class="col-6" for="vinylAlbumName"><b>Vinyl Album Name</b></label>
        <input type="text" id="vinylAlbumName" name="vinyl_album_name" class="form-control"/></div>

        <div class="col-8"><label class="col-6" for="vinylArtistName"><b>Vinyl Artist Name</b></label>
        <input type="text" id="vinylArtistName" name="vinyl_artist" class="form-control"/></div>
        
        <div class="col-8" ><label class="col-6" for="vinylType"><b>Vinyl Type</b></label>
         <select name ="vinyl_type" id="vinylType" class="form-control">
                    <option value="Pop">Pop</option>
                    <option value="Rock">Rock</option>
                    <option value="Game Soundtrack">Game Soundtrack</option>
                    <option value="Country">Country</option>
                    <option value="Movie Soundtrack">Movie Soundtrack</option>
                    <option value="Enstrumental">Enstrumental</option>
                    <option value="Classic">Classic</option>
                    <option value="Blues">Blues</option>
                    <option value="Electronic Music">Electronic Music</option>
                    <option value="Jazz">Jazz</option>
                    <option value="Hip Hop">Hip Hop</option>
                    <option value="Rap">Rap</option>
                    <option value="Launge">Launge</option>
                    <option value="R&B">R&B</option>
                    <option value="Reggea">Reggea</option>
                    <option value="Latin">Latin</option>
        </select>
    </div>
    <div class="col-8" ><label class="col-6" for="vinylReleaseDate"><b>Vinyl Release Date</b></label>
    <input type="date" id="vinylReleaseDate" name="vinyl_release_date"  min="1970-01-01" max="2800-12-31" class="form-control"/>
    </div>
    <div class="col-8" ><label class="col-6" for="comment"><b>Comment</b></label>
    <textarea id="comment" name="comment" rows="5" cols="55"></textarea><br><br>
      </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="addbuttonvinyl">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--Modal for Update Vinyl -->
<div class="modal" id="update" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update Vinyl</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="updatevinylform">
      <input type="hidden" id="idupdate" class ="idupdate" name="id"  />
      <div class="col-8"><label class="col-6" for="vinylAlbumNameUpdate"><b>Vinyl Album Name</b></label>
        <input type="text" id="vinylAlbumNameUpdate" name="vinyl_album_name" class="form-control"/></div>

        <div class="col-8"><label class="col-6" for="vinylArtistNameUpdate"><b>Vinyl Artist Name</b></label>
        <input type="text" id="vinylArtistNameUpdate" name="vinyl_artist" class="form-control"/></div>

        <div class="col-8" ><label class="col-6" for="vinylTypeUpdate"><b>Vinyl Type</b></label>
        <select name ="vinyl_type" id="vinylTypeUpdate" class="form-control">
            <option value="Pop">Pop</option>
            <option value="Rock">Rock</option>
            <option value="Game Soundtrack">Game Soundtrack</option>
            <option value="Country">Country</option>
            <option value="Movie Soundtrack">Movie Soundtrack</option>
            <option value="Enstrumental">Enstrumental</option>
            <option value="Classic">Classic</option>
            <option value="Blues">Blues</option>
            <option value="Electronic Music">Electronic Music</option>
            <option value="Jazz">Jazz</option>
            <option value="Hip Hop">Hip Hop</option>
            <option value="Rap">Rap</option>
            <option value="Launge">Launge</option>
            <option value="R&B">R&B</option>
            <option value="Reggea">Reggea</option>
            <option value="Latin">Latin</option>
</select></div>

<div class="col-8" ><label class="col-6" for="vinylReleaseDateUpdate"><b>Vinyl Release Date</b></label>
<input type="date" id="vinylReleaseDateUpdate" name="vinyl_release_date"  min="1970-01-01" max="2800-12-31" class="form-control"/>
</div>

<div class="col-8" ><label class="col-6" for="commentUpdate"><b>Comment</b></label>
<textarea id="commentUpdate" name="comment" rows="5" cols="55"></textarea><br><br>
      </div>

      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="updatebutton" id="updatebutton">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<script>
 
let youtube;
let spotify;
$(document).ready(function() {
  var table = $('#example').DataTable
  ({       
    //define dom for positioning
    dom: 'Blfrtip',
    //define scroll
    scrollCollapse: true,
    scrollY: '450px',
    "info": true,
    scrollCollapse: true,
    //select multi data with ctrl or shift
    select: {
      style: 'multi'
    },
    rowId: 'id',
    stateSave: false,
    serverSide:true,
    select: true,
    buttons: [
     
      {
        //define add buton
        text: 'New',
        id:'newbutton',
        action: function ( e, dt, node, config ) {
          $('#add').modal('show')
        }
      },
      {
        //update ajax
        text: 'Update',
        action: function ( e, dt, node, config ) {
        var $rows = table.$('tr.selected');
        if($rows.length){
          $('#update').modal('show')
          id=table.rows( { selected: true }).data()[0]['id'];
          albumname=table.rows( { selected: true }).data()[0]['vinyl_album_name'];
          artistname=table.rows( { selected: true }).data()[0]['vinyl_artist'];
          vinyltype=table.rows( { selected: true }).data()[0]['vinyl_type'];
          releasedate=table.rows( { selected: true }).data()[0]['vinyl_release_date'];
          commentname=table.rows( { selected: true }).data()[0]['comment'];
          
          $('#idupdate')[0].value=id;
          $('#vinylAlbumNameUpdate')[0].value=albumname;
          $('#vinylArtistNameUpdate')[0].value=artistname;
          $('#vinylTypeUpdate')[0].value=vinyltype;
          $('#vinylReleaseDateUpdate')[0].value=releasedate;
          $('#commentUpdate')[0].value=commentname;
        }
        else{
          swal.fire("Please choose Vinyl!");
        }
      }
    },
    {
      //delete ajax 
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
        url: "<?= site_url('VinylController/delete') ?>",
        type: "POST",
        cache: false, 
        data: {'id':id},
        processData: true,
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        dataType: "JSON"
      });
      location.reload();
    } else {
      swal.fire("Your vinyl is safe!");
    }
  }); 
}else{
  swal.fire("Please choose Vinyl!");
}
}
},
{
  //add link
  text:'Add Link',
  action: function ( e, dt, node, config ) {
    var $rows = table.$('tr.selected');
    if($rows.length){
      $('#link').modal('show')
      id=table.rows( { selected: true }).data()[0]['id'];
      $('#idlink')[0].value=id;
    }else{
      swal.fire("Please choose Vinyl!");
    }
  }
},
//export data
{
                extend: 'csv',
                split: [ 'csv','copy', 'print'],
      }

],
//define data
columns: [
  { data: "vinyl_album_name"},
  { data: "vinyl_artist" },
  { data: "vinyl_type" },
  { data: "vinyl_release_date" },
  { data: "comment" }, 
  {data: "linkyoutube"},
  {data:"linkspotify"}
],
//show data over table ajax
ajax: {
  url: "<?= site_url('VinylController/showdata') ?>",
  dataSrc: ''
},
//for tooltip for coloumns
rowCallback: function(row, data) {
  $(row).attr('title',data['vinyl_artist'])
},
});
//show data over card
table.on('select', function ( e, dt, type, indexes){
  albumname1=table.rows( { selected: true }).data()[0]['vinyl_album_name'];
  $('.vinylAlbumNamecard')[0].value=albumname1;

  albumname1=table.rows( { selected: true }).data()[0]['vinyl_artist'];
  $('.vinylArtistNamecard')[0].value=albumname1;

  albumname1=table.rows( { selected: true }).data()[0]['vinyl_release_date'];
  $('.vinyldateNamecard')[0].value=albumname1;

  //define links for selected data
  youtube=table.rows( { selected: true }).data()[0]['linkyoutube'];
  spotify=table.rows( { selected: true }).data()[0]['linkspotify'];
});
//make unvisible links coloumns
table.columns( [5,6] ).visible( false );
//combobox for search with vinyl type
$('#searchComboBox').on('change', function () {
  var selectedValue = $(this).val();
  table.column(2).search(selectedValue).draw();
});
} );
//add vinyl ajax
$(".addbuttonvinyl").click(function(){
  $.ajax({
    url: "<?= site_url('/VinylController/add_vinyl') ?>",
    type: "POST",
    data: $('#addvinylform').serialize(),
    processData: true,
    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
    dataType: "JSON",
    success: function(data) {
      if (data.success == true) {
        location.reload();
        swal.fire("Your vinyl added");
      }
    },
    error: function(jqXHR, textStatus, errorThrown) {
      location.reload();
      swal.fire("Your vinyl added");
    }
  });
});

//define update button ajax
$('.updatebutton').click(function() {
  var formData = $("#updatevinylform").serialize();
  $.ajax({
    url: "<?= site_url('VinylController/update') ?>",
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
        html:"Vinyl is Updated",
        title:"warning"
      })
    }
  });
});


//add link ajax
$('.linkbutton').click(function(){
  let formData=$('#linkform').serialize();
  $.ajax({
    url: "<?= site_url('/VinylController/addlink') ?>",
    type: "POST",
    data: $('#linkform').serialize(),
    processData: true,
    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
    dataType: "JSON",
    success: function(data) {
      if (data.success == true) {
        swal.fire({
          type:"success",
          buttons: true,
          showConfirmButton:true,
          showCancelButton:true,
          confirmButtonText:"Confirm",
          html:"Link added"
        })
      }
    },
    error: function(jqXHR, textStatus, errorThrown) {

    }
  });
})

// define click function for youtube link
$("#youtubehref").click(function(){
  $(this).attr("href",youtube);
});

//define click function for spotify link
$("#spotifyhref").click(function(){
  $(this).attr("href",spotify);
});
function redirect()
    {
    var url = "http://localhost:8080/Game";
    window.location.assign(url);
    }

</script>
</body>
</html>