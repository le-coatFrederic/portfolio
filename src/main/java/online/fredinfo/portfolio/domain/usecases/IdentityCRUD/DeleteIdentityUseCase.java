package online.fredinfo.portfolio.domain.usecases.IdentityCRUD;

import online.fredinfo.portfolio.domain.entities.Identity;
import online.fredinfo.portfolio.domain.entities.IdentityRepository;

import java.util.UUID;

public class DeleteIdentityUseCase {
    private final IdentityRepository identityRepository;

    public DeleteIdentityUseCase(IdentityRepository identityRepository) {
        this.identityRepository = identityRepository;
    }

    public IdentityRepository getIdentityRepository() {
        return identityRepository;
    }

    public void execute(Identity identity) {
        this.identityRepository.delete(identity);
    }

    public void execute(UUID identityId) {
        this.identityRepository.deleteById(identityId);
    }
}
