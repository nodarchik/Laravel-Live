<?php

namespace Tests\Unit;

use App\Repositories\UserRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndexReturnsCorrectResponse()
    {
        // Arrange
        $mockUserData = [
            [
                'name' => 'Dima',
                'email' => '@gmail.com',
                'phone' => '+38000000000',
                'photo' => 'https://d3jqtupnzefbtn.cloudfront.net/andersenlab/new-andersensite/testimonials/60x60/without-photo.png',
                'wallets' => [
                    [
                        'currency' => 'USD',
                        'amount' => 12321314124134e312321,
                    ],
                    [
                        'currency' => 'EUR',
                        'amount' => 12321314124134e312321,
                    ],
                ],
            ],
            [
                'name' => 'Mariya',
                'email' => '@gmail.com',
                'phone' => '+3800312300000',
                'photo' => 'https://d3jqtupnzefbtn.cloudfront.net/andersenlab/new-andersensite/testimonials/60x60/without-photo.png',
                'wallets' => [
                    [
                        'currency' => 'USD',
                        'amount' => 12321314124134e312321,
                    ],
                    [
                        'currency' => 'EUR',
                        'amount' => 12321314124134e312321,
                    ],
                ],
            ],
        ];

        $mockUserRepository = $this->createMock(UserRepository::class);
        $mockUserRepository->expects($this->once())
            ->method('getAllUsersWithWallets')
            ->willReturn($mockUserData);

        $this->app->instance(UserRepository::class, $mockUserRepository);

        // Act
        $response = $this->get('/api/user');

        // Assert
        $response->assertStatus(200)
            ->assertJsonStructure([
                'status',
                'message',
                'data' => [
                    '*' => [
                        'name',
                        'email',
                        'phone',
                        'photo',
                        'wallets' => [
                            '*' => [
                                'currency',
                                'amount',
                            ],
                        ],
                    ],
                ],
            ]);
    }
}
