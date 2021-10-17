<div>
    <div class="rounded overflow-hidden shadow-lg">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">投稿一覧</div>
        </div>
        <div class="px-6 pt-4 pb-2">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">内容</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($threads as $thread)
                        <tr>
                            <td class="border px-4 py-2">{{ $thread->body }}</td>
                            <td class="border px-4 py-2">編集</td>
                            <td class="border px-4 py-2">削除</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
