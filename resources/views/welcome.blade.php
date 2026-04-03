@extends('layouts.app')

@section('content')
    <div
        class="h-screen w-full bg-gradient-to-br from-slate-950 via-slate-900 to-slate-950 flex items-center justify-center relative overflow-hidden">

        <!-- Background Glow Effects -->
        <div class="absolute w-[500px] h-[500px] bg-indigo-600/30 rounded-full blur-3xl top-[-100px] left-[-100px]"></div>
        <div class="absolute w-[400px] h-[400px] bg-purple-600/30 rounded-full blur-3xl bottom-[-100px] right-[-100px]">
        </div>

        <div
            class="relative w-[95%] h-[92%] backdrop-blur-2xl bg-white/5 border border-white/10 rounded-3xl shadow-2xl flex overflow-hidden">

            <!-- Sidebar -->
            <div class="w-80 bg-white/5 border-r border-white/10 flex flex-col">

                <!-- Logo / Title -->
                <div class="p-6 border-b border-white/10">
                    <h1 class="text-2xl font-semibold text-white tracking-wide">
                        Messenger
                    </h1>
                </div>

                <!-- Search -->
                <div class="p-4">
                    <div class="relative">
                        <input type="text" placeholder="Search conversations..."
                            class="w-full bg-white/10 text-white placeholder-gray-400 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 transition">
                    </div>
                </div>

                <!-- Chat List -->
                <div class="flex-1 overflow-y-auto px-3 space-y-2">

                    <!-- Active Chat -->
                    <!-- <div
                                                        class="flex items-center p-3 rounded-2xl bg-gradient-to-r from-indigo-500/20 to-purple-500/20 border border-indigo-500/30 cursor-pointer transition">
                                                        <img src="https://i.pravatar.cc/40?img=5" class="w-12 h-12 rounded-full ring-2 ring-indigo-500">
                                                        <div class="ml-3 flex-1">
                                                            <div class="flex justify-between items-center">
                                                                <h3 class="text-white font-medium">John Doe</h3>
                                                                <span class="text-xs text-indigo-300">2m</span>
                                                            </div>
                                                            <p class="text-sm text-gray-300 truncate">Let's finalize the UI update.</p>
                                                        </div>
                                                    </div> -->

                    <!-- Chat Item -->
                    @foreach ($users as $user)

                        <div data-user-id="{{ $user->id }}"
                            class="flex items-center p-3 rounded-2xl hover:bg-white/10 cursor-pointer transition selectUser">
                            <img src="https://i.pravatar.cc/40?img=8" class="w-12 h-12 rounded-full">
                            <div class="ml-3 flex-1">
                                <div class="flex justify-between">
                                    <h3 class="text-white font-medium">{{ $user->name}}</h3>
                                    <span class="text-xs text-gray-400">1h</span>
                                </div>
                                <p class="text-sm text-gray-400 truncate">Can you review the design?</p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>


            <!-- Chat Section -->
            <div class="flex-1 flex flex-col bg-white/5 relative">

                <!-- Chat Header -->
                <div
                    class="px-8 py-6 border-b border-white/10 flex items-center justify-between backdrop-blur-xl bg-white/5">
                    <div class="flex items-center">
                        <img src="https://i.pravatar.cc/40?img=5" class="w-12 h-12 rounded-full ring-2 ring-indigo-500">
                        <div class="ml-4">
                            <h2 class="text-white font-semibold text-lg">John Doe</h2>
                            <p class="text-xs text-green-400">● Online</p>
                        </div>
                    </div>
                </div>

                <!-- Messages -->
                <div class="flex-1 overflow-y-auto px-10 py-8 space-y-6" id="messageBox">

                    <!-- Incoming -->
                    <div class="flex items-end space-x-3">
                        <img src="https://i.pravatar.cc/30?img=5" class="w-8 h-8 rounded-full">
                        <div class="bg-white/10 backdrop-blur-xl text-white px-5 py-3 rounded-2xl max-w-md shadow-lg">
                            Hey! The new UI looks incredible 🔥
                        </div>
                    </div>

                    <!-- Outgoing -->
                    <div class="flex justify-end">
                        <div
                            class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white px-5 py-3 rounded-2xl max-w-md shadow-xl">
                            Thank you! I upgraded it with glassmorphism and gradients.
                        </div>
                    </div>
                    <div class="flex items-end space-x-3">
                        <img src="https://i.pravatar.cc/30?img=5" class="w-8 h-8 rounded-full">
                        <div class="bg-white/10 backdrop-blur-xl text-white px-5 py-3 rounded-2xl max-w-md shadow-lg">
                            Hey! The new UI looks incredible 🔥
                        </div>
                    </div>

                    <!-- Outgoing -->
                    <div class="flex justify-end">
                        <div
                            class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white px-5 py-3 rounded-2xl max-w-md shadow-xl">
                            Thank you! I upgraded it with glassmorphism and gradients.
                        </div>
                    </div>
                    <div class="flex items-end space-x-3">
                        <img src="https://i.pravatar.cc/30?img=5" class="w-8 h-8 rounded-full">
                        <div class="bg-white/10 backdrop-blur-xl text-white px-5 py-3 rounded-2xl max-w-md shadow-lg">
                            Hey! The new UI looks incredible 🔥
                        </div>
                    </div>

                    <!-- Outgoing -->
                    <div class="flex justify-end">
                        <div
                            class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white px-5 py-3 rounded-2xl max-w-md shadow-xl">
                            Thank you! I upgraded it with glassmorphism and gradients.
                        </div>
                    </div>
                    <div class="flex items-end space-x-3">
                        <img src="https://i.pravatar.cc/30?img=5" class="w-8 h-8 rounded-full">
                        <div class="bg-white/10 backdrop-blur-xl text-white px-5 py-3 rounded-2xl max-w-md shadow-lg">
                            Hey! The new UI looks incredible 🔥
                        </div>
                    </div>

                    <!-- Outgoing -->
                    <div class="flex justify-end">
                        <div
                            class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white px-5 py-3 rounded-2xl max-w-md shadow-xl">
                            Thank you! I upgraded it with glassmorphism and gradients.
                        </div>
                    </div>
                    <div class="flex items-end space-x-3">
                        <img src="https://i.pravatar.cc/30?img=5" class="w-8 h-8 rounded-full">
                        <div class="bg-white/10 backdrop-blur-xl text-white px-5 py-3 rounded-2xl max-w-md shadow-lg">
                            Hey! The new UI looks incredible 🔥
                        </div>
                    </div>

                    <!-- Outgoing -->
                    <div class="flex justify-end">
                        <div
                            class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white px-5 py-3 rounded-2xl max-w-md shadow-xl">
                            Thank you! I upgraded it with glassmorphism and gradients.
                        </div>
                    </div>
                    <div class="flex items-end space-x-3">
                        <img src="https://i.pravatar.cc/30?img=5" class="w-8 h-8 rounded-full">
                        <div class="bg-white/10 backdrop-blur-xl text-white px-5 py-3 rounded-2xl max-w-md shadow-lg">
                            Hey! The new UI looks incredible 🔥
                        </div>
                    </div>

                    <!-- Outgoing -->
                    <div class="flex justify-end">
                        <div
                            class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white px-5 py-3 rounded-2xl max-w-md shadow-xl">
                            Thank you! I upgraded it with glassmorphism and gradients.
                        </div>
                    </div>
                    <div class="flex items-end space-x-3">
                        <img src="https://i.pravatar.cc/30?img=5" class="w-8 h-8 rounded-full">
                        <div class="bg-white/10 backdrop-blur-xl text-white px-5 py-3 rounded-2xl max-w-md shadow-lg">
                            Hey! The new UI looks incredible 🔥
                        </div>
                    </div>

                    <!-- Outgoing -->
                    <div class="flex justify-end">
                        <div
                            class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white px-5 py-3 rounded-2xl max-w-md shadow-xl">
                            Thank you! I upgraded it with glassmorphism and gradients.
                        </div>
                    </div>
                    <div class="flex items-end space-x-3">
                        <img src="https://i.pravatar.cc/30?img=5" class="w-8 h-8 rounded-full">
                        <div class="bg-white/10 backdrop-blur-xl text-white px-5 py-3 rounded-2xl max-w-md shadow-lg">
                            Hey! The new UI looks incredible 🔥
                        </div>
                    </div>

                    <!-- Outgoing -->
                    <div class="flex justify-end">
                        <div
                            class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white px-5 py-3 rounded-2xl max-w-md shadow-xl">
                            Thank you! I upgraded it with glassmorphism and gradients.
                        </div>
                    </div>

                    <!-- Typing Indicator -->
                    <!-- <div class="flex items-center space-x-2 text-gray-400 text-sm">
                                                                                            <span>John is typing</span>
                                                                                            <div class="flex space-x-1">
                                                                                                <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce"></div>
                                                                                                <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce delay-150"></div>
                                                                                                <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce delay-300"></div>
                                                                                            </div>
                                                                                        </div> -->

                </div>

                <!-- Floating Input -->
                <div class="p-6">
                    <form id="chatForm"
                        class="flex items-center gap-3 bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl px-4 py-3 shadow-lg focus-within:ring-2 focus-within:ring-indigo-500 transition">
                        @csrf

                        <!-- Attachment Button -->
                        <button name="file" type="button"
                            class="w-10 cursor-pointer h-10 flex items-center justify-center rounded-xl bg-white/10 hover:bg-white/20 text-white transition duration-200">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                            </svg>
                        </button>

                        <!-- Message Input -->
                        <input type="text" placeholder="Write your message..." id="message"
                            class="flex-1 bg-transparent text-white placeholder-gray-400 focus:outline-none text-sm">

                        <!-- Send Button -->
                        <button type="submit"
                            class="px-6 cursor-pointer py-2 rounded-xl bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-medium hover:scale-105 active:scale-95 transition duration-200 shadow-md">
                            Send
                        </button>

                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection