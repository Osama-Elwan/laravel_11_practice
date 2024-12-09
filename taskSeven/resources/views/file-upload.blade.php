@extends('app')

@section('contents')
    <section>
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card mt-5 mb-5">
                <div class="card-body mt-5 mb-5">
                    <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">File</label>
                            <input type="file" class="form-control" id="" name="file" >
                            @error('file')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                    <table>
                        <tbody>
                            @foreach ($files as $file)
                            <td>
                                {{-- this way to get images from local storage and link with public folder --}}
                                {{-- <img style="width: 100px" src="/storage/{{ $file->file_path }}" alt=""> --}}
                                {{-- this way if u need to use another disk  --}}
                                {{-- <img style="width: 100px" src="/uploads/{{ $file->file_path }}" alt=""> --}}
                                {{-- way two to use assets to access any file in public folder Importan note::dont use direct link with assets will cause big issue--}}
                                {{-- this way if u need to use another disk  --}}
                                {{-- <img style="width: 100px" src="{{ asset('uploads') }}/{{ $file->file_path }}" alt=""> --}}
                                {{-- more good code look at FileUploadCont line:45 --}}
                                <img style="width:100px" src="{{ asset($file->file_path) }}" alt="">
                            </td>
                                @endforeach
                        </tbody>
                    </table>
                    <hr>
                    <table>
                        <tbody>

                            <td>
                                <a href="{{ route('file.download') }}">Download File</a>
                            </td>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </section>
@endsection
