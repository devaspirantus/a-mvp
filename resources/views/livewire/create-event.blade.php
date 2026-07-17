<div class="min-h-screen bg-[#FAF8F4] py-8 px-4">
    <div class="max-w-2xl mx-auto">
        {{-- Header --}}
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-[#0F5132] mb-2">
                إنشاء مناسبة جديدة 🎁
            </h1>
            <p class="text-[#6B7280]">
                اختر هديتك، شارك الرابط، واترك أحباءك يساهمون
            </p>
        </div>

        {{-- Success Message --}}
        @if (session()->has('success'))
        <div class="mb-6 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg text-center">
            {{ session('success') }}
        </div>
        @endif

        {{-- Form Card --}}
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <form wire:submit="save" class="space-y-6">
                {{-- اسم المناسبة --}}
                <div>
                    <label for="name" class="block text-sm font-semibold text-[#1F2937] mb-2">
                        اسم المناسبة <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="name" wire:model="name" placeholder="مثال: زفاف أحمد ومها"
                        class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#0F5132] focus:border-transparent text-right"
                        dir="rtl">
                    @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- الوصف --}}
                <div>
                    <label for="description" class="block text-sm font-semibold text-[#1F2937] mb-2">
                        وصف (اختياري)
                    </label>
                    <textarea id="description" wire:model="description" rows="3"
                        placeholder="اكتب وصفاً قصيراً عن المناسبة..."
                        class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#0F5132] focus:border-transparent text-right resize-none"
                        dir="rtl"></textarea>
                    @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- المبلغ المستهدف --}}
                <div>
                    <label for="target_amount" class="block text-sm font-semibold text-[#1F2937] mb-2">
                        المبلغ المستهدف (ريال) <span class="text-red-500">*</span>
                    </label>
                    <div class="relative">
                        <input type="number" id="target_amount" wire:model="target_amount" placeholder="5000" min="100"
                            max="100000" step="100"
                            class="w-full px-4 py-3 pr-14 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#0F5132] focus:border-transparent text-right">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#6B7280] font-medium">
                            ر.س
                        </span>
                    </div>
                    <p class="mt-1 text-xs text-[#6B7280]">
                        الحد الأدنى: 100 ريال — الحد الأقصى: 100,000 ريال
                    </p>
                    @error('target_amount')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- زر الإنشاء --}}
                <button type="submit"
                    class="w-full bg-[#0F5132] hover:bg-[#0a3d26] text-white font-semibold py-4 rounded-lg transition-colors shadow-sm">
                    إنشاء المناسبة ✨
                </button>
            </form>
        </div>

        {{-- ملاحظة شرعية --}}
        <div class="mt-6 bg-[#C9A961]/10 border border-[#C9A961]/30 rounded-lg p-4 text-center">
            <p class="text-sm text-[#1F2937]">
                🕌 المناسبة تتم بموجب <strong>عقد وكالة شرعي</strong> لتنفيذ شراء الهدية
            </p>
        </div>
    </div>
</div>