    // variable for hosr_url and base_url...
    // Declare and Initialize variables for further use...
    let base_url = 'http://localhost:8080/';

    // Document is ready...
    $( document ).ready()
    {
       get_data();
    }

    $("#show_dashboard").on("click", function()
    {
        window.location = "Dashboard";
    })

    $("#show_employee").on("click", function()
    {
        window.location = "Employees";
    })

    $("#show_role").on("click", function()
    {
        window.location = "Roles";
    })

    $("#show_dept").on("click", function()
    {
        window.location = "Departments";
    })
    
    $("#add_emp").on("click", function()
    {
        window.location = "Add-Employee";
    })

    // $("#add_emp_details").on("click", function()
    // {
    //     add_data();
    // })

    $(document).on("click", "#edit_employee", function()
    {
        window.location = "Update-Emp";
    })

    $(document).on("click", "#view_employee", function()
    {
    })

    $(document).on("click", "#delete_employee", function()
    {
    })

    console.log(" base_url + 'api/getUsers.php'" , base_url + 'api/getUsers.php');

    function get_data()
    {
        console.log("get data");
        $.ajax(
            console.log("--------------------------"),
            {
            url: base_url + 'api/getUsers.php',
            dataType: 'json',
            data: {
            },
            method: 'get',
            success: function (response) 
            {
                console.log("response=-" , response);

                if (response.success)
                {
                    console.log("response=-" , response);
                }
            },
            error: function (error) {        
                }
        });

    }