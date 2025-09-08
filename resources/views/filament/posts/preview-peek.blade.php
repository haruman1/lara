<div x-data="postPreview()" class="space-y-2">
    <div class="flex items-center justify-between">
        <h3 class="text-sm font-medium">Live Preview</h3>
        <div class="text-xs text-gray-500">Preview otomatis (setiap 1s)</div>
    </div>

    <div class="border rounded-lg overflow-hidden" style="height: 480px;">
        <iframe id="post-preview-iframe" style="width:100%; height:100%; border:0;" sandbox="allow-same-origin"></iframe>
    </div>
</div>

<script>
    function postPreview() {
        return {
            timer: null,
            init() {
                // setiap 1 detik ambil nilai content dari hidden input form filament
                // RichEditor biasanya menyimpan konten ke input[name="data.content"] atau input#content
                // Kita cari textarea/hidden input yang mengandung "content"
                this.poll();
            },
            poll() {
                // jalankan polling setiap 1000ms
                this.timer = setInterval(async () => {
                    // cari input yang mengandung name "content" di dalam form Filament
                    const form = document.querySelector('form[data-controller="filament.form"]') || document
                        .querySelector('form');
                    if (!form) return;
                    // cari input di form yang bernama "data.content" atau "content"
                    let input = form.querySelector(
                        'input[name="content"], textarea[name="content"], input[name="data[content]"], textarea[name="data[content]"]'
                        );
                    if (!input) {
                        // mencoba mencari any input whose name endsWith [content]
                        input = Array.from(form.querySelectorAll('input, textarea')).find(i => /content/
                            .test(i.name));
                    }
                    if (!input) return;
                    const content = input.value || '';

                    // kirim ke route preview via fetch (POST)
                    try {
                        const token = document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content');
                        const res = await fetch("{{ route('filament.posts.preview') }}", {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': token,
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify({
                                content
                            })
                        });
                        if (!res.ok) return;
                        const json = await res.json();
                        const iframe = document.getElementById('post-preview-iframe');
                        const doc = iframe.contentDocument || iframe.contentWindow.document;
                        doc.open();
                        doc.write(json.html);
                        doc.close();
                    } catch (e) {
                        console.error('Preview error', e);
                    }
                }, 1000);
            }
        }
    }
</script>
