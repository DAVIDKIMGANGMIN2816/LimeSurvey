// Example C++ code with a race condition
#include <iostream>
#include <thread>
#include <vector>

int counter = 0;  // Shared variable without synchronization

void increment() {
    for (int i = 0; i < 10000; ++i) {
        counter++;  // Race condition: multiple threads accessing without lock
    }
}

int main() {
    std::vector<std::thread> threads;
    
    // Create 10 threads that all increment the counter
    for (int i = 0; i < 10; ++i) {
        threads.push_back(std::thread(increment));
    }
    
    // Wait for all threads to finish
    for (auto& t : threads) {
        t.join();
    }
    
    std::cout << "Final counter value: " << counter << std::endl;
    std::cout << "Expected value: 100000" << std::endl;
    
    return 0;
}
