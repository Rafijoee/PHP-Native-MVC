<style>
    body {
        overflow: hidden;
    }

    #video-background {
        position: fixed;
        top: 0;
        left: 0;
        min-width: 100%;
        min-height: 100%;
        z-index: -1;
    }
    </style>
<video autoplay loop muted id="video-background">
    <source src="<?= urlpath('images/login.mp4') ?>" type="video/mp4">
    <!-- Tambahkan sumber video lainnya jika diperlukan -->
</video>
<div class="gradient-bg flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md p-8 bg-gray-900 rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
        <h2 class="text-4xl font-bold text-white text-center mb-8">Login</h2>
        <form action="<?= urlpath('login') ?>" method="POST">
            <div class="mb-6 relative">
                <label for="email" class="block text-sm font-medium text-gray-400">Email</label>
                <div class="relative">
                    <input type="email" id="email" name="email" required class="mt-1 px-4 py-2 w-full rounded-md bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <span class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.94 6.34a.75.75 0 01.02 1.06l-.02.02-.93.94h4.94a.75.75 0 010 1.5H2l.94.94a.75.75 0 11-1.06 1.06l-2.25-2.25a.75.75 0 010-1.06L1.88 6.34a.75.75 0 011.06.02zm12.12 0a.75.75 0 00-1.06 1.06l.94.94H8a.75.75 0 000 1.5h6.94l-.94.94a.75.75 0 001.06 1.06l2.25-2.25a.75.75 0 000-1.06l-2.25-2.25z" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="mb-6 relative">
                <label for="password" class="block text-sm font-medium text-gray-400">Password</label>
                <div class="relative">
                    <input type="password" id="password" name="password" required class="mt-1 px-4 py-2 w-full rounded-md bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <span class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 2a6 6 0 00-6 6v3H3.5a1.5 1.5 0 100 3h13a1.5 1.5 0 100-3H16V8a6 6 0 00-6-6zm-3 6a3 3 0 116 0v3H7V8zm3 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
            </div>
            <button type="submit" class="w-full py-2 px-4 bg-muda hover-button-login text-white font-semibold rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transform transition duration-500 hover:scale-105">Login</button>
        </form>
        <p class="mt-8 text-center text-white">Don't have an account? <a href="#" class="text-muda custom-hover2">Sign up</a></p>
        <p class="mt-2 text-center text-white">Forgot password?</p>
    </div>

</div>

    <?php include 'resources/views/master/master.php'; ?>