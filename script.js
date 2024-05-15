$(document).ready(function(){
  // Ajax for inserting data.
  $("#btnadd").click(function(e){
    e.preventDefault();
    // alert("Btn to add.");
    let nm = $("#name").val();
    let em = $("#email").val();
    let p = $("#password").val();
    let mydata = {name:nm, email:em, pass:p};
    $.ajax({
      url: 'insert.php',
      method: 'post',
      data: mydata,

    /**
     * Success function to run after successfully ajax call.
     * @param {JSON} data
     *
     */
      success:function(data) {
        $('#msg').html("Data Inserted Successfully.");
        showData();
      }
    })
    $('form')[0].reset();
  });

  /**
   * Function showData to show data on web page.
   *  Ajax call for showing data
   */
  function showData() {
    let output = '';
    $.ajax({
    url: 'retrive.php',
    method: 'get',
    dataType: 'json',

    /**
     * Success function to run after successfully ajax call.
     * @param {JSON} data
     *
     */
    success:function(data) {
      for(i=0; i<data.length; i++) {
        output += "<tr><td>"+ data[i].id +"</td><td>"+ data[i].name +"</td><td>"+ data[i].email +"</td><td>"+ data[i].password +"</td><td><button id='btnedit' data-sid="+ data[i].id +" data-bs-toggle='modal' data-bs-target='#editModal' class='btn btn-warning'>Edit</button> <button id='btndel' data-sid="+ data[i].id +" class='btn btn-danger'>Delete</button></td></tr>";
      }
      $('#tbody').html(output);
    }
  });
  }

  // Call showData function to show data on page.
  showData();

  /**
   * Ajax call to delete data.
   */
  $("#tbody").on("click", "#btndel", function(){
    let id = $(this).attr('data-sid');
    let mydata = {id:id};
    $.ajax({
      url: 'delete.php',
      method: 'post',
      data: mydata,
      /**
       * Function to run after success of ajax call.
       * @param {JSON} data
       */
      success:function(data) {
        alert("Successfully deleted.");
        showData();
      }
    })
  })

  /**
   * Ajax call to edit data.
   */
  $("#tbody").on("click", "#btnedit", function(){
    let id = $(this).attr('data-sid');
    let mydata = {id:id};
    $.ajax({
      url: 'edit.php',
      method: 'post',
      dataType: 'json',
      data: mydata,

      /**
       * Function to run after success of ajax call.
       * @param {JSON} data
       */
      success:function(data) {
        $("#id").val(data[0].id);
        $("#ename").val(data[0].name);
        $("#eemail").val(data[0].email);
        $("#epassword").val(data[0].password);
      }
    })
  })

  /**
   * Function to update data.
   */
  $("#btnUpdate").click(function(e){
    e.preventDefault();
    let id = $("#id").val();
    let nm = $("#ename").val();
    let em = $("#eemail").val();
    let p = $("#epassword").val();
    let mydata = {name:nm, email:em, pass:p, id:id};
    // console.log(mydata);
    $.ajax({
      url: 'update.php',
      method: 'post',
      data: mydata,

      /**
       * Function to run after success of ajax call.
       * @param {JSON} data
       */
      success:function(data) {
        $("#editModal").modal("hide");
        showData();
      },

      /**
       * Function to run after failure of ajax call.
       *
       * @param xhr
       * @param status
       * @param error
       */
      error:function(xhr, status, error) {
        alert(error);
        alert(xhr);
        alert(status);
      }
    })
  });
});
