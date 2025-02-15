#include "rims.h"

unsigned char extractLower4Bits(unsigned char x) {
    return x & 0x0F;  
}

void main() {
    while (1) {
        
        B = extractLower4Bits(A);
    }
}
