<?php
function isPrime($n) {
    // Bước 1: Kiểm tra nếu n nhỏ hơn hoặc bằng 1
    if ($n <= 1) {
        return false;
    }

    // Bước 2: Duyệt từ 2 đến căn bậc hai của n
    for ($i = 2; $i <= sqrt($n); $i++) {
        // Nếu chia hết cho i => không phải số nguyên tố
        if ($n % $i == 0) {
            return false;
        }
    }

    // Nếu không chia hết cho số nào => là số nguyên tố
    return true;
}