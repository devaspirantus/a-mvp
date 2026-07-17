<div class="min-h-screen bg-[#FAF8F4] py-8 px-4">
    <div class="max-w-4xl mx-auto">
        {{-- Header --}}
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-bold text-[#0F5132]">مناسباتي 🎁</h1>
                <p class="text-sm text-[#6B7280] mt-1">إدارة وتتبع جميع مناسباتك في مكان واحد</p>
            </div>
            <a href="{{ route('events.create') }}"
                class="w-full sm:w-auto bg-[#0F5132] hover:bg-[#0a3d26] text-white font-semibold py-3 px-6 rounded-lg transition-colors shadow-sm text-center flex items-center justify-center gap-2">
                <span>+</span> إنشاء مناسبة جديدة
            </a>
        </div>

        {{-- Empty State (إذا لم يكن هناك مناسبات) --}}
        @if($events->isEmpty())
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 text-center">
            <div class="text-6xl mb-4">🎉</div>
            <h3 class="text-lg font-bold text-[#1F2937] mb-2">لم تقم بإنشاء أي مناسبة بعد</h3>
            <p class="text-[#6B7280] mb-6">ابدأ الآن وأنشئ مناسبتك الأولى وشاركها مع أحبابك</p>
            <a href="{{ route('events.create') }}"
                class="inline-block bg-[#C9A961] hover:bg-[#b89955] text-white font-semibold py-3 px-6 rounded-lg transition-colors">
                إنشاء أول مناسبة
            </a>
        </div>
        @else
        {{-- قائمة المناسبات --}}
        <div class="space-y-4">
            @foreach($events as $event)
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 hover:shadow-md transition-shadow">
                <div class="flex flex-col sm:flex-row justify-between items-start gap-4">
                    {{-- تفاصيل المناسبة --}}
                    <div class="flex-1 w-full">
                        <div class="flex items-center gap-2 mb-2">
                            <h3 class="text-lg font-bold text-[#1F2937]">{{ $event->name }}</h3>
                            @if($event->status === 'completed')
                            <span class="px-2 py-1 bg-green-100 text-green-800 text-xs font-bold rounded-full">مكتملة
                                ✅</span>
                            @else
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-bold rounded-full">نشطة
                                🟢</span>
                            @endif
                        </div>

                        <p class="text-sm text-[#6B7280] mb-4 line-clamp-2">{{ $event->description ?: 'لا يوجد وصف' }}
                        </p>

                        {{-- شريط التقدم --}}
                        <div class="mb-2">
                            <div class="flex justify-between text-xs text-[#6B7280] mb-1">
                                <span>تم جمع: {{ number_format($event->collected_amount, 0) }} ر.س</span>
                                <span>الهدف: {{ number_format($event->target_amount, 0) }} ر.س</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 overflow-hidden">
                                <div class="bg-gradient-to-l from-[#1ABC9C] to-[#0F5132] h-full rounded-full transition-all duration-500"
                                    style="width: {{ $event->progress_percentage }}%"></div>
                            </div>
                            <div class="text-left text-xs font-bold text-[#0F5132] mt-1">
                                {{ number_format($event->progress_percentage, 1) }}%
                            </div>
                        </div>
                    </div>

                    {{-- أزرار الإجراءات --}}
                    <div class="flex sm:flex-col gap-2 w-full sm:w-auto">
                        <a href="{{ route('events.show', $event->slug) }}"
                            class="flex-1 sm:flex-none text-center px-4 py-2 border border-[#0F5132] text-[#0F5132] hover:bg-[#0F5132] hover:text-white rounded-lg text-sm font-medium transition-colors">
                            عرض
                        </a>
                        <a href="{{ route('events.show', $event->slug) }}#share"
                            class="flex-1 sm:flex-none text-center px-4 py-2 bg-[#C9A961] hover:bg-[#b89955] text-white rounded-lg text-sm font-medium transition-colors">
                            مشاركة
                        </a>
                    </div each>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>