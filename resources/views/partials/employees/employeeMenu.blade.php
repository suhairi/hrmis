<div>
    <!-- active button has shadow -->
    <a  href="{{ route('employees.show', $employee) }}" 
        class="btn mr-3 rounded-full 
         transition ease-in-out delay-30 bg-indigo-400 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 shadow-md">
         <i class="fa fa-user"> </i> Profile
    </a>
    <a  href="{{ route('employees.showCuti', $employee) }}" 
        class="btn mr-3 rounded-full 
         transition ease-in-out delay-30 bg-indigo-400 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 shadow-md">
        <i class="fa fa-bed"> </i>  Cuti
    </a>
    <a  href="{{ route('employees.showGaji', $employee) }}" 
        class="btn mr-3 rounded-full 
         transition ease-in-out delay-30 bg-indigo-400 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 shadow-md">
        <i class="fa fa-usd"></i>  Gaji
    </a>
    <a  href="{{ route('employees.showAset', $employee) }}" 
        class="btn mr-3 rounded-full 
         transition ease-in-out delay-30 bg-indigo-400 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-200 shadow-md">
         <i class="fa fa-building"> </i> Aset</a>
    </a>                                
</div>

<hr class="m-3" />