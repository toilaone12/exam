<script>
    $(document).ready(function(){
        $('.add-lesson').on('submit',function(e){
            e.preventDefault();
            let formData = new FormData($(this)[0]);
            $.ajax({
                url: "{{route('lesson.add')}}",
                method: "POST",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function(data){
                    // console.log(data);
                    Swal.fire({
                        title: data.title,
                        text: data.text,
                        icon: data.icon,
                        confirmButtonText: 'Đồng ý',
                    }).then((res) => {
                        if(res.isConfirmed){
                            location.reload();
                        }
                    });
                },
                error: function(err){
                    console.log(err);
                }
            })
        })
        $('.change-lesson').on('submit',function(e){
            e.preventDefault();
            let formData = new FormData($(this)[0]);
            formData.append('id',$(this).attr('data-id'));
            $.ajax({
                url: "{{route('lesson.change')}}",
                method: "POST",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function(data){
                    // console.log(data);
                    Swal.fire({
                        title: data.title,
                        text: data.text,
                        icon: data.icon,
                        confirmButtonText: 'Đồng ý',
                    }).then((res) => {
                        if(res.isConfirmed){
                            location.href="{{route('lesson.list')}}"
                        }
                    });
                },
                error: function(err){
                    console.log(err);
                }
            })
        })
        $('.delete-lesson').on('click',function(e){
            e.preventDefault();
            Swal.fire({
                title: "Thông báo xóa kỹ năng học",
                text: 'Bạn có muốn xóa kỹ năng này không?',
                icon: 'info',
                showCancelButton: true,
                cancelButtonText: 'Hủy bỏ',
                confirmButtonText: 'Đồng ý',
            }).then((res) => {
                if(res.isConfirmed){
                    let formData = new FormData();
                    formData.append('id',$(this).attr('data-id'));
                    $.ajax({
                        url: "{{route('lesson.delete')}}",
                        method: "POST",
                        data: formData,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        dataType: 'json',
                        contentType: false,
                        processData: false,
                        success: function(data){
                            Swal.fire({
                                title: data.title,
                                text: data.text,
                                icon: data.icon
                            }).then((res) => {
                                if(res.isConfirmed){
                                    location.href="{{route('lesson.list')}}"
                                }
                            });
                        },
                        error: function(err){
                            console.log(err);
                        }
                    })
                }
            })
        })
        //level
        $('.add-level').on('submit',function(e){
            e.preventDefault();
            let formData = new FormData($(this)[0]);
            $.ajax({
                url: "{{route('level.add')}}",
                method: "POST",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function(data){
                    // console.log(data);
                    Swal.fire({
                        title: data.title,
                        text: data.text,
                        icon: data.icon,
                        confirmButtonText: 'Đồng ý',
                    }).then((res) => {
                        if(res.isConfirmed){
                            location.reload();
                        }
                    });
                },
                error: function(err){
                    console.log(err);
                }
            })
        })
        $('.change-level').on('submit',function(e){
            e.preventDefault();
            let formData = new FormData($(this)[0]);
            formData.append('id',$(this).attr('data-id'));
            $.ajax({
                url: "{{route('level.change')}}",
                method: "POST",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function(data){
                    // console.log(data);
                    Swal.fire({
                        title: data.title,
                        text: data.text,
                        icon: data.icon,
                        confirmButtonText: 'Đồng ý',
                    }).then((res) => {
                        if(res.isConfirmed){
                            location.href="{{route('level.list')}}"
                        }
                    });
                },
                error: function(err){
                    console.log(err);
                }
            })
        })
        $('.delete-level').on('click',function(e){
            e.preventDefault();
            Swal.fire({
                title: "Thông báo xóa loại bằng",
                text: 'Bạn có muốn xóa loại bằng này không?',
                icon: 'info',
                showCancelButton: true,
                cancelButtonText: 'Hủy bỏ',
                confirmButtonText: 'Đồng ý',
            }).then((res) => {
                if(res.isConfirmed){
                    let formData = new FormData();
                    formData.append('id',$(this).attr('data-id'));
                    $.ajax({
                        url: "{{route('level.delete')}}",
                        method: "POST",
                        data: formData,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        dataType: 'json',
                        contentType: false,
                        processData: false,
                        success: function(data){
                            Swal.fire({
                                title: data.title,
                                text: data.text,
                                icon: data.icon
                            }).then((res) => {
                                if(res.isConfirmed){
                                    location.href="{{route('level.list')}}"
                                }
                            });
                        },
                        error: function(err){
                            console.log(err);
                        }
                    })
                }
            })
        })
    });
</script>