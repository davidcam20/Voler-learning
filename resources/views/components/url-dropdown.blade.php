
    <div class="flex-1 flex flex-col">
        <label for="url" class="font-semibold">URL</label>
        <select name="url" id="url" data-param="url">
            <option value="all" {{ 'all' == $selected['url'] ? 'selected="selected"' : ''}}>ALL</option>
            @foreach( $urls as $url )
                <option value="{{ $url }}" {{ $url == $selected['url'] ? 'selected="selected"' : ''}}>{{ $url }}</option>
            @endforeach
        </select>
    </div>
