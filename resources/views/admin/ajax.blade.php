<script>
    CKEDITOR.replace('ckeditor');
    $(document).ready(function(){
        $('#multi-question').select2();
        $('#multi-assignment').select2();
        $('.close-lesson').on('click',function(){
            $('#addLesson').modal('hide');
        })
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
        $('.close-level').on('click',function(){
            $('#addLevel').modal('hide');
        })
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
        //question
        $('.close-question').on('click',function(){
            $('#addQuestion').modal('hide');
        })
        $('.add-question').on('submit',function(e){
            e.preventDefault();
            let formData = new FormData($(this)[0]);
            $.ajax({
                url: "{{route('question.add')}}",
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
        $('.change-question').on('submit',function(e){
            e.preventDefault();
            let formData = new FormData($(this)[0]);
            formData.append('id',$(this).attr('data-id'));
            $.ajax({
                url: "{{route('question.change')}}",
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
                            location.href="{{route('question.list')}}"
                        }
                    });
                },
                error: function(err){
                    console.log(err);
                }
            })
        })
        $('.delete-question').on('click',function(e){
            e.preventDefault();
            Swal.fire({
                title: "Thông báo xóa câu hỏi",
                text: 'Bạn có muốn xóa câu hỏi này không?',
                icon: 'info',
                showCancelButton: true,
                cancelButtonText: 'Hủy bỏ',
                confirmButtonText: 'Đồng ý',
            }).then((res) => {
                if(res.isConfirmed){
                    let formData = new FormData();
                    formData.append('id',$(this).attr('data-id'));
                    $.ajax({
                        url: "{{route('question.delete')}}",
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
                                    location.href="{{route('question.list')}}"
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
        //assignment
        $('.close-assignment').on('click',function(){
            $('#addAssignment').modal('hide');
        })
        $('.add-assignment').on('submit',function(e){
            e.preventDefault();
            let formData = new FormData($(this)[0]);
            let content = CKEDITOR.instances['ckeditor'].getData();
            if(content){
                formData.append('name',content);
                $.ajax({
                    url: "{{route('assignment.add')}}",
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
            }else{
                Swal.fire({
                    title: 'Thông báo thêm đề bài',
                    text: 'Thiếu nội dung',
                    icon: 'warning',
                    confirmButtonText: 'Đồng ý',
                })
            }
        })
        $('.change-assignment').on('submit',function(e){
            e.preventDefault();
            let formData = new FormData($(this)[0]);
            formData.append('id',$(this).attr('data-id'));
            formData.append('name',CKEDITOR.instances['ckeditor'].getData());
            $.ajax({
                url: "{{route('assignment.change')}}",
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
                            location.href="{{route('assignment.list')}}"
                        }
                    });
                },
                error: function(err){
                    console.log(err);
                }
            })
        })
        $('.delete-assignment').on('click',function(e){
            e.preventDefault();
            Swal.fire({
                title: "Thông báo xóa đề bài",
                text: 'Bạn có muốn xóa đề bài này không?',
                icon: 'info',
                showCancelButton: true,
                cancelButtonText: 'Hủy bỏ',
                confirmButtonText: 'Đồng ý',
            }).then((res) => {
                if(res.isConfirmed){
                    let formData = new FormData();
                    formData.append('id',$(this).attr('data-id'));
                    $.ajax({
                        url: "{{route('assignment.delete')}}",
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
                                    location.href="{{route('assignment.list')}}"
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
        //exam
        $('.close-exam').on('click',function(){
            $('#addExam').modal('hide');
        })
        $('#duration').on('input', function() { 
            // Lấy giá trị từ thanh trượt
            var durationValue = $(this).val();
            // Cập nhật nội dung của phần tử text-duration
            $('.text-duration').text(`(${durationValue} phút)`);
        });
        $('.add-exam').on('submit',function(e){
            e.preventDefault();
            let formData = new FormData($(this)[0]);
            $.ajax({
                url: "{{route('exam.add')}}",
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
        $('.change-exam').on('submit',function(e){
            e.preventDefault();
            let formData = new FormData($(this)[0]);
            formData.append('id',$(this).attr('data-id'));
            $.ajax({
                url: "{{route('exam.change')}}",
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
                            location.href="{{route('exam.list')}}"
                        }
                    });
                },
                error: function(err){
                    console.log(err);
                }
            })
        })
        $('.delete-exam').on('click',function(e){
            e.preventDefault();
            Swal.fire({
                title: "Thông báo xóa bài thi",
                text: 'Bạn có muốn xóa bài thi này không?',
                icon: 'info',
                showCancelButton: true,
                cancelButtonText: 'Hủy bỏ',
                confirmButtonText: 'Đồng ý',
            }).then((res) => {
                if(res.isConfirmed){
                    let formData = new FormData();
                    formData.append('id',$(this).attr('data-id'));
                    $.ajax({
                        url: "{{route('exam.delete')}}",
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
                                    location.href="{{route('exam.list')}}"
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