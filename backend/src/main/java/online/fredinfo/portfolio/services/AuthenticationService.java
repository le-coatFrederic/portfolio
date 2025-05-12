package online.fredinfo.portfolio.services;

import online.fredinfo.portfolio.dto.AuthenticationRequest;
import online.fredinfo.portfolio.dto.AuthenticationResponse;
import online.fredinfo.portfolio.dto.RegisterRequest;

public interface AuthenticationService {
    AuthenticationResponse authenticate(AuthenticationRequest request);
    AuthenticationResponse register(RegisterRequest request);
} 