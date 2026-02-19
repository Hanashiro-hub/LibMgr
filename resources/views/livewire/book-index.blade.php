<div>
    <flux:input as="input" name="search" placeholder="書籍を検索" icon="magnifying-glass" wire:model.live="search"/>

    <flux:card>
        <flux:table>
            <flux:table.columns>
                <flux:table.column>タイトル</flux:table.column>
                <flux:table.column>作者</flux:table.column>
                <flux:table.column>評価</flux:table.column>
                <flux:table.column>登録日</flux:table.column>
                <flux:table.column>更新日</flux:table.column>
            </flux:table.columns>

            <flux:table.rows>
                @foreach($books as $book)
                    <flux:table.row>
                        <flux:table.cell>{{$book->title}}</flux:table.cell>
                        <flux:table.cell>{{$book->author}}</flux:table.cell>

                        <flux:table.cell>
                            <div class="flex item-center gap-1">
                                @for($i=1; $i<=5; $i++)
                                    @if($i <= $book->star)
                                        <flux:icon.star class="size-12" variant="solid"/>
                                    @else
                                        <flux:icon.star class="size-12"/>
                                    @endif
                                @endfor
                            </div>
                        </flux:table.cell>

                        <flux:table.cell>{{$book->created_at}}</flux:table.cell>
                        <flux:table.cell>{{$book->updated_at}}</flux:table.cell>

                        <flux:table.cell>
                            <flux:link href="{{route('return.book-edit', ['book' => $book->id])}}">更新</flux:link>
                            <flux:link href="{{route('return.book-delete', ['book' => $book->id])}}">削除</flux:link>
                        </flux:table.cell>
                    </flux:table.row>
                @endforeach
            </flux:table.rows>
        </flux:table>
    </flux:card>

        {{ $books->links() }}

</div>
