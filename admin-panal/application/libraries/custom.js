    // variable for hosr_url and base_url...
    // Declare and Initialize variables for further use...
    let base_url = 'http://localhost/Employee-Management/';

    // Document is ready...
    $( document ).ready()
    {
       get_data();
       get_all_data();
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

    $("#add_emp_details").on("click", function()
    {
        add_data();
    })

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


    function add_data()
    {
        let f_name = $("#f_name").val();
        let l_name = $("#l_name").val();
        let dept = $("#dept").val();
        let job_title = $("#job_title").val();
        let role = $("#role").val();
        let manager = $("#manager").val();

        if (f_name != "" && l_name != "" && dept != "" && job_title != "" && role != "" && manager != "" )
        {
            $.ajax({
                url: base_url + 'Admin/add_department',
                data: {
                    "dept" : dept
                },
                type: "POST",
                // cache: false,
                // processData: false,
                // contentType: false,
                // dataType: false,
                success: function (response) 
                {
                    console.log(response);
                    response = JSON.parse(response)
                    if (response.success == true) 
                    {                             
                    }else 
                    {
                        alert("Something went Wrong...");                
                    }
                },
                error: function (response) 
                {
                },
            });

            $.ajax({
                url: base_url + 'Admin/add_role',
                data: {
                    "role" : role
                },
                type: "POST",
                // cache: false,
                // processData: false,
                // contentType: false,
                // dataType: false,
                success: function (response) 
                {
                    console.log(response);
                    response = JSON.parse(response)
                    if (response.success == true) 
                    {                              
                    }else 
                    {
                        alert("Something went Wrong...");                
                    }
                },
                error: function (response) 
                {
                },
            });

            $.ajax({
                url: base_url + 'Admin/add_employee',
                data: {
                    "f_name" : f_name,
                    "l_name" : l_name,
                    "job_title" : job_title,
                    "manager" : manager
                },
                type: "POST",
                // cache: false,
                // processData: false,
                // contentType: false,
                // dataType: false,
                success: function (response) 
                {
                    console.log(response);
                    // response = JSON.parse(JSON.stringify(response))
                    response = JSON.parse(response)
                    if (response.success == true) 
                    {    
                        alert("Data Added Successfully...");                          
                    }else 
                    {
                        alert("Something went Wrong...");                
                    }
                },
                error: function (response) 
                {
                },
            });
        }
        else
        {
            alert("Please Enter Empty Field.")
        }

    }

    function get_data()
    {
        $.ajax({
            url: base_url + 'Admin/get_employee',
            dataType: 'json',
            data: {
            },
            method: 'get',
            beforeSend: function (response) {
            },
            complete: function (response) {
            },
            error: function (response) {
            },
            success: function (response) 
            {
                if (response.success)
                {
                    $("#total_emp").html(response['Data'].length);
                    // for (var x in response)
                    // {
                    //     for (var j in response[x])
                    //     {
                    //         let sgst = (response[x][j]['sgst']);
                    //         html = '<option value="'+ sgst +'">'+ sgst +'%</option>';
                    //         $("#sgst").append(html);
                    //     }
                    // }
                }
            },
            error: function (error) {        
                }
        });

        $.ajax({
            url: base_url + 'Admin/get_dept',
            dataType: 'json',
            data: {
            },
            method: 'get',
            beforeSend: function (response) {
            },
            complete: function (response) {
            },
            error: function (response) {
            },
            success: function (response) 
            {
                if (response.success)
                {
                    console.log("Dept =",response["Data"])
                    console.log("Response =",response["Data"][0]['COUNT(department)']);
                    $("#total_dept").html(response['Data'].length);
                    // for (var x in response)
                    // {
                    //     for (var j in response[x])
                    //     {
                    //         let sgst = (response[x][j]['sgst']);
                    //         html = '<option value="'+ sgst +'">'+ sgst +'%</option>';
                    //         $("#sgst").append(html);
                    //     }
                    // }
                }
            },
            error: function (error) {        
                }
        });

        $.ajax({
            url: base_url + 'Admin/get_role',
            dataType: 'json',
            data: {
            },
            method: 'get',
            beforeSend: function (response) {
            },
            complete: function (response) {
            },
            error: function (response) {
            },
            success: function (response) 
            {
                if (response.success)
                {
                    $("#total_role").html(response['Data'].length);

                    // for (var x in response)
                    // {
                    //     for (var j in response[x])
                    //     {
                    //         let sgst = (response[x][j]['sgst']);
                    //         html = '<option value="'+ sgst +'">'+ sgst +'%</option>';
                    //         $("#sgst").append(html);
                    //     }
                    // }
                }
            },
            error: function (error) {        
                }
        });
    }

    function get_all_data()
    {
        let count = 0;
        $.ajax({
            url: base_url + 'Admin/get_all_data',
            dataType: 'json',
            data: {
            },
            method: 'get',
            beforeSend: function (response) {
            },
            complete: function (response) {
            },
            error: function (response) {
            },
            success: function (response) 
            {
                $("#tbody-1").empty();
                $("#tbody-2").empty();
                $("#tbody-3").empty();
                let html1 = html2 = "";
                if (response.success)
                {
                
                    for (var x in response)
                    {
                        for (var j in response[x])
                        {
                            count++;
                            console.log(count);
                            // let sgst = (response[x][j]['sgst']);
                            html1 += ('<tr><td>'+ count +'</td>'+
                                        '<td>'+ response[x][j]['emp_id'] +'</td>'+
                                        '<td>'+ response[x][j]['first_name'] +'</td>'+
                                        '<td>'+ response[x][j]['last_name'] +'</td>'+
                                        '<td>'+ response[x][j]['department'] +'</td>'+
                                        '<td>'+ response[x][j]['job_title'] +'</td>'+
                                        '<td>'+ response[x][j]['role'] +'</td>'+
                                        '<td><a id="view_employee"><i class="fa fa-eye"></i></a><a id="edit_employee"><i class="fas fa-edit"></i></a><a id="delete_employee"><i class="fas fa-trash-alt"></i></a></td>'+
                                    '</tr>');
                            html2 += ('<tr><td>'+ count +'</td>'+
                                        '<td>'+ response[x][j]['emp_id'] +'</td>'+
                                        '<td>'+ response[x][j]['first_name'] +'</td>'+
                                        '<td>'+ response[x][j]['last_name'] +'</td>'+
                                        '<td>'+ response[x][j]['department'] +'</td>'+
                                        '<td>'+ response[x][j]['role'] +'</td>'+
                                    '</tr>');
                            
                        }
                    }
                    $("#tbody-1").append(html1);
                    $("#tbody-2").append(html2);
                    $("#tbody-3").append(html2);
                }
            },
            error: function (error) {        
                }
        });
    }