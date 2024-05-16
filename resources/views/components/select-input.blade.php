@props(['disabled' => false,'value'=>0, 'data' => []])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) !!}>
@if (!empty($data))
    @foreach ($data as $d )
        <option value="{{$d['id']}}" @if($value>0 && $value==$d['id']) selected @endif>{{$d['name']}}</option>
    @endforeach
@endif

</select>
