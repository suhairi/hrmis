@extends('layouts.master')

@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">

            @include('partials.buttons.back')

            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>Rekod Baru</strong></div>

                        <div class="card-body">

                            <form method="POST" action="{{ route('employees.store') }}">
                            @csrf

                                <h3 class="mb-2"><strong>Maklumat Peribadi</strong></h3>                                
                                <div class="card">
                                    <div class="card-body bg-gray-50">
                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                            <label class="block">
                                                <span class="text-gray-700"><strong>Nama Penuh</strong></span>
                                                <input type="text" name="name" class="block w-full mt-1 rounded-md" placeholder="Nama Penuh" value="{{ old('name')}}" autocomplete="off" required min="3" />
                                            </label>
                                            @error('name')
                                                <div class="inline text-sm text-red-600">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                            <label class="block">
                                                <span class="text-gray-700"><strong>No KP</strong></span>
                                                <input type="number" name="nokp" class="block w-full mt-1 rounded-md" placeholder="No Kad Pengenalan" value="{{ old('nokp')}}" autocomplete="off" required />
                                            </label>
                                            @error('nokp')
                                                <div class="text-sm text-red-600">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                            <label class="block">
                                                <span class="text-gray-700"><strong>Jantina</strong></span>
                                                <select name="gender" class="block w-full mt-1 rounded-md" value="{{ old('gender')}}" required />
                                                    <option value="">Jantina</option>
                                                    <option value="LELAKI" {{ (old('gender') == "LELAKI") ? 'selected' : ''}}>LELAKI</option>
                                                    <option value="PEREMPUAN" {{ (old('gender') == "PEREMPUAN") ? 'selected' : ''}}>PEREMPUAN</option>
                                                </select>
                                            </label>
                                            @error('gender')
                                                <div class="text-sm text-red-600">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                    

                                <!-- ########################################################## -->
                                <h3 class="mb-2"><strong>Maklumat Jawatan</strong></h3>                                
                                <div class="card">
                                    <div class="card-body bg-gray-50">
                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                            <label class="block">
                                                <span class="text-gray-700"><strong>Jawatan</strong></span>
                                                <select name="position_id" class="block w-full mt-1 rounded-md" required>
                                                    <option value="">Pilih Jawatan</option>
                                                    @foreach($positions as $position)
                                                        <option value="{{ $position->id }}" {{ (old('position_id') == $position->id) ? 'selected' : ''}}>{{ $position->name }}</option>
                                                    @endforeach
                                                </select>
                                            </label>
                                            @error('position_id')
                                                <div class="text-sm text-red-600">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4 mt-2">
                                            <label class="block">
                                                <span class="text-gray-700"><strong>Tarikh Mula Bekerja</strong></span>
                                                <input type="date" name="start_date" class="block w-full mt-1 rounded-md" value="{{ old('start_date') }}" required>
                                            </label>                                    
                                            @error('start_date')
                                                <div class="text-sm text-red-600">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4 mt-2">
                                            <label class="block">
                                                <span class="text-gray-700"><strong>Status Perjawatan</strong></span>
                                                <select name="service_status" class="block w-full mt-1 rounded-md" required>
                                                    <option value="">Pilih Status Perjawatan</option>
                                                    <option value="TETAP" {{ (old('service_status') == "TETAP") ? 'selected' : ''}}>TETAP</option>
                                                    <option value="KONTRAK" {{ (old('service_status') == "KONTRAK") ? 'selected' : ''}}>KONTRAK</option>
                                                    <option value="SAMBILAN" {{ (old('service_status') == "SAMBILAN") ? 'selected' : ''}}>SAMBILAN</option>
                                                    <option value="BERHENTI" {{ (old('service_status') == "BERHENTI") ? 'selected' : ''}}>BERHENTI</option>
                                                    <option value="PERCUBAAN" {{ (old('service_status') == "PERCUBAAN") ? 'selected' : ''}}>PERCUBAAN</option>
                                                </select>
                                            </label>
                                            @error('service_status')
                                                <div class="text-sm text-red-600">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-xs-4 col-sm-4 col-md-4 mt-2">
                                            <label class="block">
                                                <span class="text-gray-700"><strong>Gaji Pokok (RM)</strong></span>
                                                <div class="input-group mb-3">
                                                    <input type="number" name="basic_salary" class="block w-full mt-1 rounded-md" min="0" placeholder="0.00" step=".01" value="{{ old('basic_salary') }}" required>
                                                </div>
                                            </label>
                                            @error('basic_salary')
                                                <div class="text-sm text-red-600">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4 mt-2">
                                            <label class="block">
                                                <span class="text-gray-700"><strong>Elaun (RM)</strong></span>
                                                <div class="input-group mb-3">
                                                    <input type="number" name="allowance" class="block w-full mt-1 rounded-md" min="0" placeholder="0.00" step=".01" value="{{ old('allowance') }}" >
                                                </div>
                                            </label>
                                            @error('allowance')
                                                <div class="text-sm text-red-600">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4 mt-2">
                                            <label class="block">
                                                <span class="text-gray-700"><strong>No KWSP</strong></span>
                                                <input type="number" name="kwsp_no" class="block w-full mt-1 rounded-md" placeholder="No KWSP" value="{{ old('kwsp_no')}}" autocomplete="off" />
                                            </label>
                                            @error('kwsp_no')
                                                <div class="text-sm text-red-600">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                

                                <!-- ######################################################## -->
                                <h3 class="mb-2" class="mt-5"><strong>Maklumat Pendidikan</strong></h3>                                
                                <div class="card">
                                    <div class="card-body bg-gray-50">                                
                                        <div class="col-xs-4 col-sm-4 col-md-4 mt-2">
                                            <label class="block">
                                                <span class="text-gray-700"><strong>Pendidikan</strong></span>
                                                <select name="education_id" class="block w-full mt-1 rounded-md" required>
                                                    <option value="">Pilih Taraf Pendidikan</option>
                                                    @foreach($educations as $education)
                                                        <option value="{{ $education->id }}" {{ (old('education_id') == $education->id) ? 'selected' : ''}}>{{ $education->name }}</option>
                                                    @endforeach
                                                </select>
                                            </label>
                                            @error('education_id')
                                                <div class="text-sm text-red-600">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4 mt-2">
                                            <label class="block">
                                                <span class="text-gray-700"><strong>Pengkhususan Pendidikan</strong></span>
                                                <input type="text" name="edu_major" class="block w-full mt-1 rounded-md" placeholder="Pengkhususan Pendidikan" value="{{ old('edu_major')}}" autocomplete="off" />
                                            </label>
                                            @error('edu_major')
                                                <div class="text-sm text-red-600">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- ######################################################## -->
                                @include('partials.buttons.submit', ['text' => 'Cipta'])

                            </form>                            
                            
                    
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection