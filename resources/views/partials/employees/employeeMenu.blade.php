<div>
    <!-- active button has shadow -->
    <a  href="{{ route('employees.show', $employee) }}" 
        class="btn mr-3 rounded-full 
         transition ease-in-out delay-30 bg-indigo-400 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 shadow-md">Profile
    </a>
    <a  href="{{ route('employees.showCuti', $employee) }}" 
        class="btn mr-3 rounded-full 
         transition ease-in-out delay-30 bg-indigo-400 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 shadow-md">Cuti
    </a>
    <a  href="{{ route('employees.showGaji', $employee) }}" 
        class="btn mr-3 rounded-full 
         transition ease-in-out delay-30 bg-indigo-400 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 shadow-md">Gaji
    </a>
    <a  href="{{ route('employees.showAset', $employee) }}" 
        class="btn mr-3 rounded-full 
         transition ease-in-out delay-30 bg-indigo-400 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-200 shadow-md">Aset
    </a>                                
</div>

<hr class="m-3" />