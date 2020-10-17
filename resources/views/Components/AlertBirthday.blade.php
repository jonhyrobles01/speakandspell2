<table class='border-collapse border-2 border-gray-500' style="width: 100%">
	<thead>
		<th class="border border-gray-400 px-4 py-2 text-gray-800">NOMBRE</th>
		<th class="border border-gray-400 px-4 py-2 text-gray-800">DIA</th>
	</thead>
	<tbody>
		@if(count($StudentsBirthday) > 0)
            @foreach($StudentsBirthday as $student)
                <tr>
                    <td class="border border-gray-400 px-4 py-2"> {{ $student->nombre }} </td>
                    <td class="border border-gray-400 px-4 py-2"> {{ now()->parse($student->nacimiento)->format('d') }} </td>
                </tr>
			@endforeach
        @else
            <tr>
                <td>
                <td>
            </tr>                
		@endif
	</tbody>
</table>
@if(count($Expiredlevels) == 0)
	<br>
@else
	<h4>
		<span class='label label-danger'>
		Hay {{ count($Expiredlevels) }} Niveles que ya vencieron
		</span>
	</h4> 
	<br> 
	<h4>
		<span class='label label-danger'>
			verificalos en el modulo de niveles
		</span>
	</h4>

	<a href='/listaNivel' class='btn btn-danger'>revisar</a>
@endif