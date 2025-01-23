package online.fredinfo.portfolio.domain.usecases.IdentityCRUD;

import online.fredinfo.portfolio.domain.entities.Identity;
import online.fredinfo.portfolio.domain.entities.IdentityRepository;

public class SaveIdentityUseCase {
    private final IdentityRepository identityRepository;

    public SaveIdentityUseCase(IdentityRepository identityRepository) {
        this.identityRepository = identityRepository;
    }

    public IdentityRepository getIdentityRepository() {
        return identityRepository;
    }

    public Identity execute(Identity identity) {
        return identityRepository.save(identity);
    }
}
