<div class="min-h-screen bg-[#FAF8F4] py-8 px-4">
    <div class="max-w-2xl mx-auto">
        {{-- Event Card --}}
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            {{-- Header --}}
            <div class="bg-gradient-to-l from-[#0F5132] to-[#1ABC9C] p-6 text-white text-center">
                <h1 class="text-2xl font-bold mb-2">{{ $event->name }}</h1>
                @if ($event->description)
                <p class="text-white/90 text-sm">{{ $event->description }}</p>
                @endif
            </div>

            {{-- Progress Section --}}
            <div class="p-6">
                {{-- المبلغ المجموع --}}
                <div class="text-center mb-4">
                    <div class="text-4xl font-bold text-[#0F5132]">
                        {{ number_format($event->collected_amount, 0) }}
                        <span class="text-lg font-normal text-[#6B7280]">ريال</span>
                    </div>
                    <p class="text-sm text-[#6B7280] mt-1">
                        من أصل {{ number_format($event->target_amount, 0) }} ريال
                    </p>
                </div>

                {{-- شريط التقدم --}}
                <div class="mb-6">
                    <div class="flex justify-between text-xs text-[#6B7280] mb-2">
                        <span>التقدم</span>
                        <span>{{ number_format($event->progress_percentage, 1) }}%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                        <div class="bg-gradient-to-l from-[#1ABC9C] to-[#0F5132] h-full rounded-full transition-all duration-500"
                            style="width: {{ $event->progress_percentage }}%"></div>
                    </div>
                </div>

                {{-- حالة المناسبة --}}
                @if ($event->isCompleted())
                <div class="bg-green-50 border border-green-200 rounded-lg p-4 text-center mb-4">
                    <p class="text-green-800 font-semibold">
                        🎉 مبروك! اكتمل جمع المبلغ
                    </p>
                </div>
                @else
                {{-- زر المساهمة --}}
                <a href="{{ route('events.contribute', $event->slug) }}"
                    class="block w-full bg-[#C9A961] hover:bg-[#b89955] text-white font-semibold py-4 rounded-lg transition-colors shadow-sm text-center">
                    ساهم الآن 💝
                </a>
                @endif
            </div>
        </div>

        {{-- رابط المشاركة --}}
        <div class="mt-6 bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <h3 class="font-semibold text-[#1F2937] mb-3 text-center">📤 شارك المناسبة</h3>
            <div class="flex gap-2">
                <input type="text" value="{{ route('events.show', $event->slug) }}" readonly
                    class="flex-1 px-3 py-2 bg-gray-50 border border-gray-200 rounded-lg text-sm text-right" dir="ltr"
                    id="share-url">
                <button
                    onclick="navigator.clipboard.writeText(document.getElementById('share-url').value); this.textContent='✓ تم';"
                    class="px-4 py-2 bg-[#0F5132] hover:bg-[#0a3d26] text-white rounded-lg text-sm font-medium transition-colors">
                    نسخ
                </button>
            </div>
        </div>
    </div>
</div>