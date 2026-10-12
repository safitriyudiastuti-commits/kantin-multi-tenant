<x-layouts.admin title="QR Meja {{ $table->code }}">
    <h1 class="text-xl font-semibold">QR — {{ $table->label }} ({{ $table->code }})</h1>
    @if ($qrImage)
        <div class="mt-4 rounded-xl border border-zinc-200 bg-white p-4 dark:border-zinc-800">
            <img
                src="{{ $qrImage }}"
                alt="QR Meja {{ $table->code }}"
                class="mx-auto h-80 w-80"
            >
        </div>
    @endif
    <div class="mt-6"><a class="text-sm font-medium underline" href="{{ route('admin.tables.index') }}">← Kembali ke daftar meja</a></div>
</x-layouts.admin>