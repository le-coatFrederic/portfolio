package online.fredinfo.portfolio.services.impl;

import org.springframework.security.authentication.AuthenticationManager;
import org.springframework.security.authentication.UsernamePasswordAuthenticationToken;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.stereotype.Service;

import lombok.RequiredArgsConstructor;
import online.fredinfo.portfolio.dto.AuthenticationRequest;
import online.fredinfo.portfolio.dto.AuthenticationResponse;
import online.fredinfo.portfolio.dto.RegisterRequest;
import online.fredinfo.portfolio.models.User;
import online.fredinfo.portfolio.repositories.UserRepository;
import online.fredinfo.portfolio.security.JwtService;
import online.fredinfo.portfolio.services.AuthenticationService;

@Service
@RequiredArgsConstructor
public class AuthenticationServiceImpl implements AuthenticationService {

    private final UserRepository userRepository;
    private final PasswordEncoder passwordEncoder;
    private final JwtService jwtService;
    private final AuthenticationManager authenticationManager;

    @Override
    public AuthenticationResponse register(RegisterRequest request) {
        var user = User.builder()
                .username(request.username())
                .password(passwordEncoder.encode(request.password()))
                .role("USER")
                .build();
        userRepository.save(user);
        
        var jwtToken = jwtService.generateToken(user);
        return new AuthenticationResponse(jwtToken);
    }

    @Override
    public AuthenticationResponse authenticate(AuthenticationRequest request) {
        authenticationManager.authenticate(
            new UsernamePasswordAuthenticationToken(
                request.username(),
                request.password()
            )
        );
        
        var user = userRepository.findByUsername(request.username())
            .orElseThrow();
        
        var jwtToken = jwtService.generateToken(user);
        
        return new AuthenticationResponse(jwtToken);
    }
} 