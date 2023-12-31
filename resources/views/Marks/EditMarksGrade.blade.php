
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    {{-- icon --}}
    <link
        href="img\icon img.png "
        rel="icon">

    <title>Update Class</title>
    <style>
        h1{
            font-size: 30px;
        }
        h3{
            font-size: 25px;
        }
    </style>
</head>

<body>
    <form action="{{route('MarksGrade.UpdateSave',$all->id)}}">
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12 ">

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4 border my-3">
                            <h3 class="mt-4 text-center text-primary">Enter Update Marks Details</h3>
                            <h6 class="mt-4">Enter Grade :-</h6>
                            <input name="Grade" value="{{ $all->Grade }}"  class="form-control" type="text"><br>
                            <h6>Start Marks :-</h6>
                            <input name="StartMarks" value="{{ $all->StartMarks }}"  class="form-control" type="text"><br>
                            <h6>End Marks :-</h6>
                            <input name="EndMarks" value="{{ $all->EndMarks }}"  class="form-control" type="text"><br>
                            <h6>Remarks :-</h6>
                            <input name="Remarks" value="{{ $all->Remarks }}"  class="form-control" type="text"><br>
                            <button type="submit" class="btn btn-outline-primary  mt-2 mb-3">Update</button>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>

{{-- </center>
    </form>
@endsection --}}